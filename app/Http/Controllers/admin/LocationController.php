<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function index()
    {
        $locations = Location::all();
        return view('admin.locations.index', compact('locations'));
    }


    public function create()
    {
        return view('admin.locations.index');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        Location::create($data);
        return redirect()->route('admin.locations.index');
    }

    public function show(Location $functionalArea)
    {
        //
    }


    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('admin.locations.edit', compact('location'));
    }


    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->update($this->getData($request));
        return redirect()->route('admin.locations.index');
    }


    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect()->back();
    }

    protected function getData(Request $request){
        $rules = [
            'name' => 'required','string',
        ];
        return $request->validate($rules);
    }
}
