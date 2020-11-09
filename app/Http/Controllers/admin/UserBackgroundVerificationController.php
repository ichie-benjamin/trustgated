<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserBackgroundVerification;
use Illuminate\Http\Request;

class UserBackgroundVerificationController extends Controller
{
    public function index()
    {
        $v_packages = UserBackgroundVerification::all();
        return view('admin.user_bg_v.packages-list', compact('user_bg_v'));
    }

    public function create()
    {
        return view('admin.user_bg_v.index');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        UserBackgroundVerification::create($data);
        return redirect()->route('admin.user_bg_v.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $packages = UserBackgroundVerification::findOrFail($id);
        return view('admin.user_bg_v.packages-edit', compact('packages'));
    }

    public function update(Request $request, $id)
    {
        $v_packages = UserBackgroundVerification::findOrFail($id);
        $v_packages->update($this->getData($request));
        return redirect()->route('admin.user_bg_v.index');
    }

    public function destroy($id)
    {
        $v_packages = UserBackgroundVerification::findOrFail($id);
        $v_packages->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'employment_verification' => 'required',
            'education_verification' => 'required',
            'reference_verification' => 'required',
            'amount' => 'required',
            'extra' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
