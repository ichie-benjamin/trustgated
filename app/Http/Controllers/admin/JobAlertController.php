<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\JobAlert;
use Illuminate\Http\Request;

class JobAlertController extends Controller
{
    public function store(Request $request)
    {
        JobAlert::create($request->all());

        return redirect()->route('admin.banners.index')->with('success', 'Banner added successfully');
    }
}
