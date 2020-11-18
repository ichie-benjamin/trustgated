<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserBackgroundVerification;
use Illuminate\Http\Request;

class UserBackgroundVerificationController extends Controller
{
    public function index()
    {
        $users = UserBackgroundVerification::all();
        return view('admin.user_bg_v.index', compact('users'));
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

    public function storeUpload(Request $request)
    {
        $data = $this->getDData($request);
        $item = UserBackgroundVerification::findOrFail($data['id']);
        $item->update(['document' => $data['document']]);
        return redirect()->route('admin.background.submissions')->with('success','Document Uploaded');
    }

    public function show($id)
    {
        $item = UserBackgroundVerification::findOrFail($id);
        return view('admin.user_bg_v.show', compact('item'));
    }
    public function upload($id)
    {
        $item = UserBackgroundVerification::findOrFail($id);
        return view('admin.user_bg_v.upload', compact('item'));
    }
    public function approve($id)
    {
        $item = UserBackgroundVerification::findOrFail($id);
        $item->approved = true;
        $item->save();
        return redirect()->back()->with('success','Background Submission Successfully Approved');
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

    protected function getDData(Request $request)
    {
        $rules = [
            'id' => 'required',
            'document' => 'required',
        ];
        return $request->validate($rules);
    }
}
