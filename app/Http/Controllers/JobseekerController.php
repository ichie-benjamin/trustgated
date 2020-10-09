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
}
