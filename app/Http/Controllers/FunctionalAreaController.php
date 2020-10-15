<?php

namespace App\Http\Controllers;

use App\Models\FunctionalArea;
use Illuminate\Http\Request;

class FunctionalAreaController extends Controller
{

    public function index()
    {
        $functional_areas = FunctionalArea::all();
        return view('admin.functional-area.functional-area-list', compact('functional_areas'));
    }


    public function create()
    {
       return view('admin.functional-area.functional-area-list');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        FunctionalArea::create($data);
        return redirect()->route('admin.functional-area.index');
    }

    public function show(FunctionalArea $functionalArea)
    {
        //
    }


    public function edit($id)
    {
        $functional_area = FunctionalArea::findOrFail($id);
        return view('admin.functional-area.functional-area-edit', compact('functional_area'));
    }


    public function update(Request $request, $id)
    {
        $functional_area = FunctionalArea::findOrFail($id);
        $functional_area->update($this->getData($request));
        return redirect()->route('admin.functional-area.index');
    }


    public function destroy($id)
    {
        $functional_area = FunctionalArea::findOrFail($id);
        $functional_area->delete();
        return redirect()->back();
    }

    protected function getData(Request $request){
        $rules = [
            'main_category' => 'required',
            'category_functional_area' => 'required',
        ];
        return $request->validate($rules);
    }
}
