<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
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

}
