<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\EmployerAccess;
use App\Models\EmployerProduct;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function resumeAccess(){
        $industry_type = [];
        return view('admin.resume_access', compact('industry_type'));
    }
    public function inactiveResumes(){
        $title = 'Inactive Resumes';
        $users = User::whereRoleIs('jobseekers')->get();
        return view('admin.users.user-list', compact('users','title'));
    }

    public function inactiveCompanies(){
        $title = 'Inactive Companies';
        $jobs = Job::pluck('company_id');
        $companies = Company::whereNotIn('id',$jobs)->get();
        return view('admin.users.companies', compact('companies','title'));
    }

    public function resumeSearch(Request $request){
        $title = 'Resumes Search Result';
       $users = User::whereRoleIs('jobseekers')->whereFunctionArea($request->functional_area)->orWhere('industry',$request->industry_type)->get();

        if(count($users) < 1){
            return redirect()->back()->with('failure','No result found');
        }
        return view('admin.users.user-list', compact('users','title'));
    }

    public function employeeDBAccess(){
        $title = 'Employee Database Access Management';
        $db_access = EmployerAccess::wherePaid(true)->pluck('user_id');
        $users = User::whereIn('id',$db_access)->whereRoleIs('employer')->get();

        return view('admin.users.employee-db-access', compact('users','title'));
    }

    public function employeeJobAccess(){
        $title = 'Employee Job Posting Access management';
        $db_access = EmployerProduct::wherePaid(true)->pluck('user_id');
        $users = User::whereIn('id',$db_access)->whereRoleIs('employer')->get();

        return view('admin.users.employee-job-access', compact('users','title'));
    }

    public function employeeDBAccessOrders(){
        $title = 'Employee Database Access Orders';
     $db_access = EmployerAccess::wherePaid(true)->get();

        return view('admin.users.employee-db-access-orders', compact('db_access','title'));
    }

    public function employeeJobAccessOrders(){
        $title = 'Employee Job Access Orders';
     $db_access = EmployerProduct::wherePaid(true)->get();

        return view('admin.users.employee-job-access-orders', compact('db_access','title'));
    }

    public function packagePurchased(){
        $title = 'Purchased Packages';
        $packages = [];

        return view('admin.packages.purchased', compact('packages','title'));
    }

}
