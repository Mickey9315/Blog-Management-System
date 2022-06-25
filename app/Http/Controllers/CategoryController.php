<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategoryList()
    {
        return view('admin.pages.category.categoryList');
    }

    function createCategory()
    {
        return view('admin.pages.category.addCategory');
    }
}
