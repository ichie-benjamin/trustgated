<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\admin\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        //
        $banners = Banner::all();

        return view('admin.banner.index', ['banners' => $banners]);
    }

    public function store(Request $request)
    {
        Banner::create($request->all());

        return redirect()->route('admin.banners.index')->with('success', 'Banner added successfully');
    }

    public function show(Banner $banner)
    {
        //
    }

    public function edit(Banner $banner)
    {
        //
        return view('admin.banner.edit', ['banner' => $banner]);
    }


    public function update(Request $request, Banner $banner)
    {
        //
        try {

            $banner->update($request->all());

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }


        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully');
    }

    public function destroy(Banner $banner)
    {
        //
        try {

            $banner->delete();

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }

        return back()->with('success', 'Banner deleted successfully');
    }
}
