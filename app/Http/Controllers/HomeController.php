<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use App\Models\FunctionalArea;
use App\Models\IndustryType;
use App\Models\Job;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function index()
    {
        $cities = Cache::remember('cities', 3600, function () {
            return City::withCount('jobs')->whereFeatured(1)->get();
        });
        $companies = Company::select('name','logo','slug')->limit('18')->get();
        $f_areas = FunctionalArea::withCount('jobs')->whereFeatured(1)->inRandomOrder()->limit(6)->get();
        $industries = IndustryType::withCount('jobs')->orderBy('jobs_count', 'desc')->limit(12)->get();
        $jobs = Job::latest()->limit(8)->get();
        return view('index', compact('f_areas','industries','companies','jobs','cities'));
    }

    public function terms(){
        $content = Page::whereTitle('Seeker : Terms and Conditions')->first()->content;
        return view('pages.terms',compact('content'));
    }

    public function about(){
        $content = Page::whereTitle('Seeker : About Us')->first()->content;
        return view('pages.about',compact('content'));
    }

    public function privacy(){
        $content = Page::whereTitle('Seeker : Privacy Policy')->first()->content;
        return view('pages.privacy',compact('content'));
    }

    public function faq(){
        $content = Page::whereTitle('Seeker : FAQ')->first()->content;
        return view('pages.faq',compact('content'));
    }

    public function recruitersProfile($username){
        $user = User::whereUsername($username)->first();
        $top_recruiters = User::with('company')->whereRoleIs('employer')->get();
        return view('pages.recruiter-profile', compact('top_recruiters','user'));
    }

    public function contactus(){

        $content = Page::whereTitle('Contact Us')->first()->content;

        return view('pages.contactus', compact('content'));
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
