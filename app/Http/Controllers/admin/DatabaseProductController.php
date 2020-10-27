<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DatabaseProduct;
use Illuminate\Http\Request;

class DatabaseProductController extends Controller
{
    public function index()
    {
        $products = DatabaseProduct::all();
        return view('admin.dbproducts.dbproducts-list', compact('products'));
    }

    public function create()
    {
        return view('admin.dbproducts.dbproducts-list');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        DatabaseProduct::create($data);
        return redirect()->route('admin.dbproducts.index')->with('success', 'Database Access added successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $products = DatabaseProduct::findOrFail($id);
        return view('admin.dbproducts.dbproducts-edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $dbproducts = DatabaseProduct::findOrFail($id);
        $dbproducts->update($this->getData($request));
        return redirect()->route('admin.dbproducts.index')->with('success', 'Database Access update successfully');
    }

    public function destroy($id)
    {
        $dbproducts = DatabaseProduct::findOrFail($id);
        $dbproducts->delete();
        return redirect()->back()->with('success', 'Database Access deleted successfully');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'no_of_days' => 'required',
            'no_of_resumes' => 'required',
            'no_of_emails' => 'required',
            'become_future_list' => 'required',
            'price' => 'required',
        ];
        return $request->validate($rules);
    }
}
