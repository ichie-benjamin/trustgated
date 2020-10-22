<?php

namespace App\Http\Controllers;

use App\Models\FunctionalArea;
use App\Models\IndustryType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function index()
    {
//        $f_areas = Cache::remember('functional_areas', 60, function () {
//            return DB::table('functional_areas')->whereFeatured(1)->get();
//        });
    $f_areas = FunctionalArea::withCount('jobs')->whereFeatured(1)->inRandomOrder()->limit(6)->get();
//    $industries = IndustryType::withCount('jobs')->inRandomOrder()->limit(12)->get();
    $industries = IndustryType::withCount('jobs')->orderBy('jobs_count', 'desc')->limit(12)->get();
        return view('index', compact('f_areas','industries'));
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
