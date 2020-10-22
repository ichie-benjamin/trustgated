<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\admin\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
       $products = Products::all();
       return view('admin.products.products-list', compact('products'));
    }

    public function create()
    {
       return view('admin.products.products-list');
    }

    public function store(Request $request)
    {
       $data = $this->getData($request);
       Products::create($data);
       return redirect()->route('admin.products.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('admin.products.products-edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Products::findOrFail($id);
        $products->update($this->getData($request));
        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
       $products = Products::findOrFail($id);
       $products->delete();
       return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
          'name' => 'required',
          'no_of_days' => 'required',
          'no_of_jobs' => 'required',
          'price' => 'required',
        ];
        return $request->validate($rules);
    }
}
