<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('state')){
            $id = $request->get('state');
            $states = State::whereId($id)->get();
            $cities = City::with('state')->whereStateId($id)->get();
        }else {
            $states = State::all();
            $cities = City::with('state')->get();

        }

        return view('admin.cities.index', compact('cities', 'states'));
    }


    public function create()
    {
        $countries = Country::all();
        return view('admin.cities.index', compact('countries'));
    }


    public function store(Request $request)
    {

        $data = $this->getData($request);
        City::create($data);
        return redirect()->back()->with('success', 'City Successfully added');
    }

    public function show(City $functionalArea)
    {
        //
    }


    public function edit($id)
    {
        $city = City::with('state')->findOrFail($id);
        $states = State::all();
        return view('admin.cities.edit', compact('city','states'));
    }


    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $city->update($this->getData($request));
        return redirect()->route('admin.cities.index');
    }


    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->back();
    }

    protected function getData(Request $request){
        $rules = [
            'name' => 'required','string',
            'state_id' => 'required',
            'featured' => 'required',
            'image' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
