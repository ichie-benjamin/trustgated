<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Highligh;
use Illuminate\Http\Request;

class HighlighController extends Controller
{
    public function index()
    {
        $highlights = Highligh::all();
        return view('admin.highlights.list', compact('highlights'));
    }

    public function create()
    {
        return view('admin.highlights.list');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        Highligh::create($data);
        return redirect()->route('admin.highlights.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $highlight = Highligh::findOrFail($id);
        return view('admin.highlights.edit', compact('highlight'));
    }

    public function update(Request $request, $id)
    {
        $highlights = Highligh::findOrFail($id);
        $highlights->update($this->getData($request));
        return redirect()->route('admin.highlights.index');
    }

    public function destroy($id)
    {
        $highlights = Highligh::findOrFail($id);
        $highlights->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'icon' => 'required',
            'head' => 'required',
            'body' => 'required',
        ];
        return $request->validate($rules);
    }
}
