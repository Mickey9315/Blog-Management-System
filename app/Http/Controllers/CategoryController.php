<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategoryList()
    {
        $categories=Category::all();
        return view('admin.pages.category.categoryList',compact('categories'));
    }

    function createCategory()
    {
        return view('admin.pages.category.addCategory');
    }

    public function storeCategory(Request $request)
    {
          $filename=null;
          if ($request->hasFile('image'))
          {
          
          $file=$request->file('image');
          $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);
          }
          
     
     Category::create([

          'name'=>$request->name,
          'image'=>$filename,

         ]);
         return redirect()->back();
    }
}
