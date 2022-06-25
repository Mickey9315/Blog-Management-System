<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPostLists()
    {
         return view('admin.pages.post.postList');
    }

    public function createPost()
    {
         return view('admin.pages.post.createPost');
    }
    
}
