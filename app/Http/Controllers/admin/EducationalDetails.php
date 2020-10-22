<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\admin\Controller;
use App\Models\EducationDetails;
use Illuminate\Http\Request;

class EducationalDetails extends Controller
{

    public function index()
    {
       $education_details = EducationDetails::all();
       return view('admin.educational-details.educational-details', compact('education_details'));
    }

    public function create()
    {
        return view('admin.educational-details.educational-details');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        EducationDetails::create($data);
        return redirect()->route('admin.educational-details.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $educational_details = EducationDetails::findOrFail($id);
        return view('admin.educational-details.educational-details-edit', compact('educational_details'));
    }

    public function update(Request $request, $id)
    {
        $educational_details = EducationDetails::findOrFail($id);
        $educational_details->update($this->getData($request));
        return redirect()->route('admin.educational-details.index');
    }

    public function destroy($id)
    {
       $education_details = EducationDetails::findOrFail($id);
       $education_details->delete();
       return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'category' => 'required',
            'name' => 'required',
        ];
        return $request->validate($rules);
    }
}
