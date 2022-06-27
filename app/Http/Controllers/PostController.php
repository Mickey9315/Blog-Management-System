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
     $posts=Post::all();
     //dd($categories);
      return view('admin.pages.post.createPost',compact('categories','posts'));
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
          'description'=>strip_tags($request->description),
          'category_id'=>$request->category,
          'image'=>$filename,

         ]);
         return redirect()->back();
    }

    function editPost($id)
    {
      $post=Post::find($id);
      $categories=Category::all();
      return view('admin.pages.post.editPost',compact('post','categories'));
    }

    function updatePost(Request $request,$id)
    {
        $post=Post::find($id);
        $post_image = $post->image;

        if($request->hasFile('image'))
        {
            
            $post_image = date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $post_image);
        }

        $post->update([
            'title'=>$request->title,
            'category_id'=>$request->category,
            'description'=>$request->description,
            'image'=>$post_image
        ]);
        return redirect()->back()->with('success',' Update successfully..');
    }

    public function deletePost($id)
    {
          Post::find($id)->delete();
          return redirect()->back();
    }
}
