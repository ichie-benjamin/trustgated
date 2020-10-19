<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $f_areas = Cache::remember('functional_areas', 60, function () {
            return DB::table('functional_areas')->whereFeatured(1)->get();
        });
        return view('index', compact('f_areas'));
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function contactus(){
        return view('pages.contactus');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function index()
//    {
//
//        return view('home');
//    }
}
