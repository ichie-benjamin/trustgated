<?php

namespace App\Http\Controllers;

use App\Models\Job;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $featured = Post::where('featured',1)->limit(5)->get();
        $featured_id = $featured->pluck('id');
        $jobs = Job::whereIsActive(1)->latest()->limit(7)->get();
        $posts = Post::whereNotIn('id',$featured_id)->paginate(10);
        $categories = Category::all();
        return view('pages.blog', compact('posts','featured','jobs','categories'));
    }
    public function show($slug){
        $post = Post::with('category')->where('slug', '=', $slug)->firstOrFail();
        $featured = Post::where('featured',1)->limit(5)->get();
        $jobs = Job::whereIsActive(1)->latest()->limit(7)->get();
        $categories = Category::all();
        return view('pages.view_post', compact('post','featured','jobs','categories'));
    }
    public function category($slug){
        $cat = Category::where('slug',$slug)->first();
        if(!$cat){
            return abort(404);
        }
        $featured = Post::where('featured',1)->limit(5)->get();
        $featured_id = $featured->pluck('id');
        $jobs = Job::whereIsActive(1)->latest()->limit(7)->get();
        $posts = Post::where('category_id',$cat->id)->whereNotIn('id',$featured_id)->paginate(10);
        $categories = Category::all();
        return view('pages.blog', compact('posts','featured','jobs','categories','slug'));
    }
}
