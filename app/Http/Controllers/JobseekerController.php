<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobseekerController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('jobseeker.profile.index', compact('user'));
    }
    
    public function profileEdit()
    {
        return view('pages.jobseeker-profile-edit');
    }

    public function changePassword(Type $var = null)
    {
        return view('pages.changepasswordseeker');
    }

    public function manageFollow()
    {
        return view('pages.manage_follow');
    }

    public function follow()
    {
        return view('pages.follow');
    }

    public function blockCompanies()
    {
        return view('pages.block-companies');
    }
        
        
    public function applicationHistory()
    {
        return view('pages.application-history');
    }

    public function createEmployee()
    {
    	 return view('pages.create_emp');
    }

    public function moredetails()
    {
        return view('pages.moredetails');
    }

    public function editResume()
    {
    	 return view('pages.edit_resume_det');
    }

    public function itSkills()
    {
    	return view('pages.itskills');
    }

    public function eduDetails()
    {
    	return view('pages.educationdetails');
    }
}
