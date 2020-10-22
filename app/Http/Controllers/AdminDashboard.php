<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function __invoke()
    {
        $jobs =  Job::count();
        $today_jobs =  Job::whereDate('created_at', Carbon::today())->count();
        $employers =  $users = User::whereRoleIs('employer')->count();
        $today_employers =  $users = User::whereRoleIs('employer')->whereDate('created_at', Carbon::today())->count();
        $jobseekers =  $users = User::whereRoleIs('jobseeker')->count();
        $today_jobseekers =  $users = User::whereRoleIs('jobseeker')->whereDate('created_at', Carbon::today())->count();
        $admins =  $users = User::whereRoleIs('admin')->count();

        $l_jobseekers = $users = User::whereRoleIs('jobseeker')->latest()->limit('5')->get();
        $l_employers = $users = User::whereRoleIs('employer')->latest()->limit('5')->get();

        $data =
            [
                'jobs' => $jobs,
                'today_jobs' => $today_jobs,
                'employers' => $employers,
                'today_employers' => $today_employers,
                'jobseekers' => $jobseekers,
                'today_jobseekers' => $today_jobseekers,
                'l_jobseekers' => $l_jobseekers,
                'l_employers' => $l_employers,
                'admins' => $admins,
            ];
        return view('admin.index',$data);
    }
}
