<?php

namespace App\Http\Controllers;

use App\Models\JobAlert;
use Illuminate\Http\Request;

class JobAlertController extends Controller
{
    public function store(Request $request)
    {
        JobAlert::create($request->all());

        return redirect()->back()->with('success', 'Banner added successfully');
    }
}
