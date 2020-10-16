<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //
        $pages = Page::all();

        return view('admin.pages.index', ['pages' => $pages]);
    }

    public function store(Request $request)
    {
        Page::create($request->all());

        return redirect()->route('admin.pages.index')->with('success', 'CMS added successfully');
    }

    public function show(Page $page)
    {
        //
    }

    public function edit(Page $page)
    {
        //
        return view('admin.pages.edit', ['page' => $page]);
    }


    public function update(Request $request, Page $page)
    {
        //
        try {

            $page->update($request->all());

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }


        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully');
    }

    public function destroy(Page $page)
    {
        //
        try {

            $page->delete();

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong'.$e->getMessage());

        }

        return back()->with('success', 'Page deleted successfully');
    }
}
