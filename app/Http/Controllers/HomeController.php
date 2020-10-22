<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\FunctionalArea;
use App\Models\IndustryType;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function index()
    {
//        $f_areas = Cache::remember('functional_areas', 60, function () {
//            return DB::table('functional_areas')->whereFeatured(1)->get();
//        });
        $companies = Company::select('name','logo','slug')->limit('18')->get();
    $f_areas = FunctionalArea::withCount('jobs')->whereFeatured(1)->inRandomOrder()->limit(6)->get();
    $industries = IndustryType::withCount('jobs')->orderBy('jobs_count', 'desc')->limit(12)->get();
    $jobs = Job::all();
        return view('index', compact('f_areas','industries','companies','jobs'));
    }

    public function recruitersProfile($username){
        $user = User::whereUsername($username)->first();
        $top_recruiters = User::with('company')->whereRoleIs('employer')->get();
        return view('pages.recruiter-profile', compact('top_recruiters','user'));
    }

    public function contactus(){
        return view('pages.contactus');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function index()
//    {
//
//        return view('home');
//    }
}
