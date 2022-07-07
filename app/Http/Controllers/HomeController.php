<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $posts=Post::all();
        return view('frontend.home',compact('categories','posts'));
    }

    function postDetails()
    {
        $posts_details=Post::all();
        return view('frontend.pages.postDetails',compact('posts_details'));

    }
}
