<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\Country;
use App\Models\Company;
use App\Models\Job;
use App\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->user()->hasRole('employer')){
            $data['companies'] = count(Company::select('id','user_id')->where('user_id',auth()->user()->id)->get());
            $data['jobs'] = count(Job::select('id','user_id')->where('user_id',auth()->user()->id)->get());
            $data['applied'] = 0;
        }else{
            $data['companies'] = 0;
            $data['jobs'] = 0;
            $data['applied'] = count(AppliedJob::select('id','user_id')->where('user_id',auth()->user()->id)->get());;
        }
        return view('dashboard.index', compact('data'));
    }
    public function messageIndex(){
        return view('dashboard.message.index');
    }
    public function bookmarks(){
        return view('dashboard.bookmarks');
    }
    public function bookmarkedFreeelancer(){
        return view('dashboard.bookmarked_freelancer');
    }
    public function setting(){
        $user = auth()->user();
        $countries = Country::pluck('name');
        $roles = Role::select('name','id','display_name')->whereNotIn('name', ['dev','admin'])->get();
        return view('dashboard.account.settings',compact('user','roles','countries'));
    }
    public function profileSetting(){
//        $user = auth()->user();
//        $countries = Country::pluck('name');
//        $roles = Role::select('name','id','display_name')->whereNotIn('name', ['dev','admin'])->get();
//        return view('dashboard.account.settings',compact('user','roles','countries'));
        $user = auth()->user();
        if(!$user){
            return abort('404');
        }
        return view('pages.setup-profile',compact('user'));
    }
    public function employerReviews(){
        return view('dashboard.reviews_employer');
    }
    public function freelancerReviews(){
        return view('dashboard.reviews_freelancer');
    }
}
