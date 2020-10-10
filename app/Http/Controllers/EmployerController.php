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
        if(!$company){
            return redirect('home');
        }
        return view('employer.profile.index', compact('user','company'));
    }
}
