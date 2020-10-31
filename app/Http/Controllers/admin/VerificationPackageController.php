<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VerificationPackage;
use Illuminate\Http\Request;

class VerificationPackageController extends Controller
{
    public function index()
    {
        $v_packages = VerificationPackage::all();
        return view('admin.v_packages.packages-list', compact('v_packages'));
    }

    public function create()
    {
        return view('admin.v_packages.packages-list');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        VerificationPackage::create($data);
        return redirect()->route('admin.v_packages.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $v_packages = VerificationPackage::findOrFail($id);
        return view('admin.v_packages.packages-edit', compact('v_packages'));
    }

    public function update(Request $request, $id)
    {
        $v_packages = VerificationPackage::findOrFail($id);
        $v_packages->update($this->getData($request));
        return redirect()->route('admin.v_packages.index');
    }

    public function destroy($id)
    {
        $v_packages = VerificationPackage::findOrFail($id);
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
        ];
        return $request->validate($rules);
    }
}
