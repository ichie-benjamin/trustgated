<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.index');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);
        Category::create($data);
        return redirect()->route('admin.categories.index');
    }

    public function show(Category $functionalArea)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($this->getData($request));
        return redirect()->route('admin.categories.index');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }

    protected function getData(Request $request){
        $rules = [
            'name' => 'required','string',
        ];
        return $request->validate($rules);
    }
}
