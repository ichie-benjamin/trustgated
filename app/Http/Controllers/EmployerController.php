<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $company = Company::whereUserId($user->id)->first();
        if(auth()->user()->hasRole('admin')){
            $company = Company::latest()->first();
        }elseif(!$company){
            return redirect('home');
        }
        return view('employer.profile.index', compact('user','company'));
    }

    public function empResumePack(){
        return view('employer.resume_pack');
    }

    public function addSubUser(){
        return view('employer.add_sub_user');
    }

    public function subUsers(){
        return view('employer.sub_user_list');
    }

    public function Transactions(){
        return view('employer.transaction');
    }

    public function changePassword(){
        return view('employer.change_password');
    }
}
