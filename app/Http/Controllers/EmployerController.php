<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\EmployerAccess;
use App\Models\EmployerProduct;
use App\Models\User;
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

    public function featuredResume(){
        return view('employer.featured_resumes');
    }

    public function searchResume(Request $request){
        $user = User::whereRoleIs('jobseeker');
        if($request->has('keyskill')){
            $user->where('skills','LIKE','%'.$request->get('keyskill').'%')
                ->orWhere('skills','LIKE','%'.$request->get('keyskill').'%');
        }
        $users = $user->paginate(10);
        if(count($users) < 1){
            return redirect()->back()->with('failure', 'No match found');
        }

        return view('employer.resume_search_result', compact('users'));
    }

    public function addSubUser(){
        return view('employer.add_sub_user');
    }

    public function subUsers(){
        return view('employer.sub_user_list');
    }

    public function TransactionPayment($type, $id){
        if($type === 'access'){
            $item = EmployerAccess::findOrFail($id);
            $info = 'Employer Database Access Plan Payment';
        }else{
            $item = EmployerProduct::findOrFail($id);
            $info = 'Job Posting Plan Payment';
        }
        if($item->paid){
            return redirect()->route('employer.transactions')->with('failure','Plan already paid for');
        }
        return view('employer.transaction_payment', compact('item', 'type','info'));
    }

    public function Transactions(Request $request){
        if($request->has('status')){
            $products = EmployerProduct::whereUserId(auth()->id())->wherePaid(false)->get();
            $access = EmployerAccess::whereUserId(auth()->id())->wherePaid(false)->get();
        }else{
            $products = EmployerProduct::whereUserId(auth()->id())->get();
            $access = EmployerAccess::whereUserId(auth()->id())->get();
        }
        return view('employer.transaction', compact('products', 'access'));
    }

    public function changePassword(){
        return view('employer.change_password');
    }
}
