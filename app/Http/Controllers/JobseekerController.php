<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobseekerController extends Controller
{
    public function profile(){
        $user = Auth::user();
        if($user->skills){
            $jobs = Job::where('tags','LIKE','%'.$user->skills.'%')->orWhere('city','LIKE','%'.$user->city.'%')
                ->orWhere('country','LIKE','%'.$user->country.'%')
                ->latest()->paginate(10);
        }else {
            $jobs = Job::latest()->paginate(10);
        }

        if(!$user->cv){
            return redirect()->route('edit_resume_det')->with('failure', 'Upload a resume to make your account public');
        }

        return view('jobseeker.profile.index', compact('user','jobs'));
    }

    public  function employers(){
        $employers =  Employer::whereUserId(auth()->id())->get();
        return view('pages.jobseeker_manage_employer', compact('employers'));
    }


    public function profileEdit()
    {
        $user = Auth::user();
        return view('pages.jobseeker-profile-edit',compact('user'));
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
        $applications = AppliedJob::where('user_id',auth()->user()->id)->get();
//        $applications = Job::whereIn('id',$jobs)->get();
        return view('pages.application-history', compact('applications'));
    }

    public function createEmployee()
    {
    	 return view('pages.create_emp');
    }

    public function editEmployee($id)
    {
        $employer = Employer::findOrFail($id);
    	 return view('pages.edit_emp', compact('employer'));
    }

    public function deleteEmployer(Request $request, $id)
    {
        $employer = Employer::findOrFail($id);

        $employer->delete();

    	 return redirect()->back()
             ->with('success', 'employer succesfully deleted');
    }

    public function moredetails()
    {
        $user = Auth::user();
        return view('pages.moredetails', compact('user'));
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
