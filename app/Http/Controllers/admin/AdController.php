<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        //
        $ads = Ad::all();

        return view('admin.ads.index', ['ads' => $ads]);
    }

    public function create()
    {
        return view('admin.service-areas.country-create');
    }


    public function store(Request $request)
    {
        $ad = Ad::create($request->all());

        return redirect()->route('admin.ads.index')->with('success', 'Country added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        //
        return view('admin.ads.edit', ['ad' => $ad]);
    }


    public function update(Request $request, Ad $ad)
    {
        //
        try {

            $ad->update($request->all());

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }


        return redirect()->route('admin.ads.index')->with('success', 'Ad updated successfully');
    }

    public function destroy(Ad $ad)
    {
        //
        try {

            $ad->delete();

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }

        return back()->with('success', 'Ad deleted successfully');
    }
}
