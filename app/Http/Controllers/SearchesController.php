<?php

namespace App\Http\Controllers;

use App\Models\Job;
//use App\Post;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class SearchesController extends Controller
{
    public function getIndex( Request $request ) {
        $s = $request->query('s');

        // Query and paginate result
        $posts = Post::where('title', 'like', "%$s%")
            ->orWhere('body', 'like', "%$s%")
            ->orWhere('meta_keywords', 'like', "%$s%")
            ->paginate(9);

//        $featured = Post::where('featured',1)->limit(5)->get();
//        $featured_id = $featured->pluck('id');
        $jobs = Job::whereIsActive(1)->latest()->limit(7)->get();
//        $posts = Post::whereNotIn('id',$featured_id)->paginate(10);
        $categories = Category::all();

        return view('pages.searches', ['posts' => $posts, 's' => $s, 'categories' => $categories,'jobs'=>$jobs ]);
    }
}
