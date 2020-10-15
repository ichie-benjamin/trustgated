<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{

    public function index()
    {
        $skills = Skills::all();
        return view('admin.skills-list', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills-list');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        Skills::create($data);
        return redirect()->route('admin.skills.index')
            ->with('success_message', 'Key Skill created successfully.');
    }

    public function show(Skills $skills)
    {
        //
    }

    public function edit($id)
    {
        $skills = Skills::findOrFail($id);
        return view('admin.skills-edit', compact('skills'));
    }

    public function update($id, Request $request)
    {
        $skills = Skills::findOrFail($id);
        $skills->update($this->getData($request));
        return redirect()->route('admin.skills.index');
    }


    public function destroy($id)
    {
        $skills = Skills::findOrFail($id);
        $skills->delete();
        return redirect()->back()->with('delete_message', 'key Skill Deleted');
    }

    protected function getData(Request $request){
        $rules = [
            'skill_name' => 'required',
        ];
        return $request->validate($rules);
    }
}
