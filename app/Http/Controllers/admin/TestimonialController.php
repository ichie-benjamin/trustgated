<?php

namespace App\Http\Controllers\admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\Controller;
use PHPUnit\Util\Test;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'testimonial_image' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
