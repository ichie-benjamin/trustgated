<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;

class JobsController extends Controller
{


    public function toggleDisabled($slug){
        $job = Job::whereSlug($slug)->first();
        if($job){
            $job->is_active = !$job->is_active;
            $job->save();
            return redirect()->back()
                ->with('success', 'Job status successfully updated.');
        }else {
            return redirect()->back()
                ->with('unexpected_error', 'Something went wrong.');
        }

    }

    public function forceDelete($id)
    {
        try {
            $job = Job::withTrashed()->findOrFail($id);
            $job->forceDelete();

            return redirect()->route('jobs.index')
                ->with('success_message', 'Job was successfully deleted from trashed and cant be restored.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function index()
    {
        $title = 'Successfully Job Posted!';
        $jobs = Job::with('user','type','category','company')->latest()->get();

        return view('admin.jobs.list', compact('jobs','title'));
    }

    public function edit($slug){
        $job = Job::findBySlugOrFail($slug);
//$types = Type::pluck('name','id')->all();
//$categories = JobCategory::pluck('name','id')->all();
//$locations = Location::pluck('name','id')->all();
        $companies = Company::pluck('name','id')->all();

        $users = [];
        $types = [];
        $categories = [];
        $locations = [];

        return view('admin.jobs.edit', compact('job','companies','users','types','locations','categories'));
    }


    public function update($id, Request $request)
    {
           $data = $this->getData($request);
            $job = Job::findOrFail($id);


        $job->update($data);


        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job successfully modified');

    }


    protected function getData(Request $request)
    {
        $rules = [
            'title' => 'string|min:1|max:255|required',
            'slug' => 'string|min:1|nullable',
            'description' => 'nullable',
            'user_id' => 'nullable',
            'is_active' => 'boolean|nullable',
            'category_id' => 'nullable',
            'locations' => 'nullable',
            'min_salary' => 'required|string|min:1',
            'max_salary' => 'required|string|min:1',
            'company_id' => 'required',
            'is_apply_here' => 'boolean|nullable',
            'email' => 'nullable',
            'url' => 'string|min:1|nullable',
            'closing_date' => 'nullable',
            'files' => 'string|min:1|nullable',
            'tags' => 'string|min:1|nullable',
            'country' => 'string|min:1|nullable',
            'city' => 'string|min:1|nullable',
            'state' => 'string|min:1|nullable',
            'address' => 'string|min:5|required',
            'type_id' => 'nullable',
'industry_id' => 'required',
'job_to'  => 'nullable',
'functional_area' => 'nullable',
'job_role_id' => 'nullable',
'candidate_description' => 'nullable',
'experience_from' => 'nullable',
'experience_to' => 'nullable',
'qualification' => 'nullable',
'currency_id' => 'nullable',
        ];

        $data = $request->validate($rules);

        // $data['is_active'] = false;
        $data['category_id'] = $data['industry_id'];
//        $data['location_id'] = $data['industry_id'];
        $data['type_id'] = 1;
        // $data['user_id'] = auth()->user()->id;
        $data['is_apply_here'] = true;

        return $data;
    }

}


