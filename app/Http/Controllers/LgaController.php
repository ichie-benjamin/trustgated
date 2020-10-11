<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Lga;
use App\Models\State;
use Illuminate\Http\Request;

class LgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.service-areas.lga-index', ['lgas' => Lga::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.service-areas.lga-create', ['countries' => Country::all(), 'states' => State::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {

            $lga = Lga::create($request->all());

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }


        return redirect()->route('admin.lgas.index')->with('success', 'LGA added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function show(Lga $lga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function edit(Lga $lga)
    {
        //
        return view('admin.service-areas.lga-edit', ['lga' => $lga, 'countries' => Country::all(), 'states' => State::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lga $lga)
    {
        //
        try {

            $lga->update($request->all());

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }


        return redirect()->route('admin.lgas.index')->with('success', 'State updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lga $lga)
    {
        //
        try {

            $lga->delete();

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }

        return back()->with('success', 'LGA deleted successfully');
    }
}
