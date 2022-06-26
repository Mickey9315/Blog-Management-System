<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPostLists()
    {
        $posts=Post::all();
         return view('admin.pages.post.postList',compact('posts'));
    }

    public function createPost()
    {
     $categories=Category::all();
     
     //dd($categories);
      return view('admin.pages.post.createPost',compact('categories'));
    }
    
    public function storePost(Request $request)
    {
          $filename=null;
          if ($request->hasFile('image'))
          {
          
          $file=$request->file('image');
          $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);
          }
          
     
     Post::create([

          'title'=>$request->title,
          'description'=>$request->description,
          'category_id'=>$request->category,
          'image'=>$filename,

         ]);
         return redirect()->back();
    }
}
