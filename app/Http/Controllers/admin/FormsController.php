<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index(Request $request)
    {
        $forms = Form::whereModel($request->model)->get();
        return view('admin.forms.index', compact('forms'));
    }

    public function backgroundIndex()
    {
        $model = 'verification_user_forms';
        $forms = Form::whereModel($model)->get();
        return view('admin.forms.background_verification_index', compact('forms','model'));
    }


    public function create()
    {
        return view('admin.forms.index');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        $data['name'] = strtolower(str_replace(' ','_',$data['name']));
        Form::create($data);
        return redirect()->back()->with('success', 'Form added successfully');
    }

    public function show(Form $functionalArea)
    {
        //
    }


    public function edit($id)
    {
        $form = Form::findOrFail($id);
        return view('admin.forms.edit', compact('form'));
    }


    public function update(Request $request, $id)
    {
        $form = Form::findOrFail($id);
        $data = $this->getData($request);
        $data['name'] = strtolower(str_replace(' ','_',$data['name']));
        $form->update($data);
        if($data['model'] == 'verification_user_forms'){
            return redirect()->route('admin.background.form.index');
        }
        return redirect()->route('admin.forms.index');
    }


    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();
        return redirect()->back();
    }

    protected function getData(Request $request){
        $rules = [
            'name' => 'required','string',
            'required' => 'required','integer',
            'page' => 'nullable',
            'rows' => 'nullable',
            'type' => 'nullable',
            'model' => 'nullable','model',
        ];

        return $request->validate($rules);
    }
}
