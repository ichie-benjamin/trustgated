<?php

namespace App\Http\Controllers;

use App\Models\IndustryType;
use Illuminate\Http\Request;

class IndustryTypeController extends Controller
{

    public function index()
    {
       $industry_types = IndustryType::all();
       return view('admin.industry-type-list', compact('industry_types'));
    }


    public function create()
    {
        return view('admin.industry-type-list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $this->getData($request);
        IndustryType::create($data);
        return redirect()->back()
            ->with('success_message', 'Industry Type created successfully.');
    }


    public function show(IndustryType $industryType)
    {
        //
    }


    public function edit($id)
    {
        $industry_type = IndustryType::findOrFail($id);
        return view('admin.industry-type-edit', compact('industry_type'));
    }

    public function update(Request $request, $id)
    {
        $industry_type = IndustryType::findOrFail($id);
        $industry_type->update($this->getData($request));
        return redirect()->route('admin.industry-type.index');
    }

    public function destroy($id)
    {
        $industry_type = IndustryType::findOrFail($id);
        $industry_type->delete();
        return redirect()->back()->with('deleted', 'Industry Type Deleted');
    }

    protected function getData(Request $request){
        $rules = [
            'category' => 'required',
            'meta_title' => 'nullable',
            'description' => 'nullable',
            'keywords' => 'nullable',
            'cat_industry_type' => 'required',
            'job_type' => 'required',
        ];
        return $request->validate($rules);
    }
}
