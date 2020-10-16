<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{

    public function index()
    {
        $packages = Packages::all();
        return view('admin.packages.packages-list', compact('packages'));
    }

    public function create()
    {
       return view('admin.packages.packages-list');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        Packages::create($data);
        return redirect()->route('admin.packages.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $packages = Packages::findOrFail($id);
        return view('admin.packages.packages-edit', compact('packages'));
    }

    public function update(Request $request, $id)
    {
        $packages = Packages::findOrFail($id);
        $packages->update($this->getData($request));
        return redirect()->route('admin.packages.index');
    }

    public function destroy($id)
    {
       $packages = Packages::findOrFail($id);
       $packages->delete();
       return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'no_of_users' => 'required',
            'price' => 'required',
            'logo' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
