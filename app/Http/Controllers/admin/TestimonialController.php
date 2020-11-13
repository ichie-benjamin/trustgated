<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use PHPUnit\Util\Test;

class TestimonialController extends Controller
{

    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.index');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        Testimonial::create($data);
        return redirect()->route('admin.testimonial.index');
    }


    public function show(Testimonial $testimonial)
    {

    }

    public function edit($id)
    {
      $testimonial = Testimonial::findOrFail($id);
      return view('admin.testimonials.edit', compact('testimonial'));
    }


    public function update(Request $request, $id)
    {
       $testimonial = Testimonial::findOrFail($id);
       $testimonial->update($this->getData($request));
       return redirect()->route('admin.testimonial.index');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'testimonial_image' => 'required',
        ];
        return $request->validate($rules);
    }
}
