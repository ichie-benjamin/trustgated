<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('country')){
            $id = $request->get('country');
            $states = State::whereCountryId($id)->get();
        }else {
            $states = State::all();
        }

        return view('admin.service-areas.state-index', ['states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $countries  =

        return view('admin.service-areas.state-create', ['countries' => Country::all()]);
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

            $zone = State::create($request->all());

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }


        return redirect()->route('admin.states.index')->with('success', 'State added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        //
        return view('admin.service-areas.state-edit', ['state' => $state, 'countries' => Country::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        //
        try {

            $state->update($request->all());

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }


        return redirect()->route('admin.states.index')->with('success', 'State updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
        try {

            $state->delete();

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }

        return back()->with('success', 'State deleted successfully');
    }
}
