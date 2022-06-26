<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});
Route::get('/', function () {

    return view('admin.dashboard');
})->name('dashboard');

// post
Route::get('postList',[PostController::class,'showPostLists'])->name('post.list');
Route::get('create',[PostController::class,'createPost'])->name('post.create');
Route::post('store',[PostController::class,'storePost'])->name('post.store');

//category
Route::get('categoryList',[CategoryController::class,'showCategoryList'])->name('category.list');
Route::get('/createCategory',[CategoryController::class,'createCategory'])->name('createCategory');
Route::post('storeCategory',[CategoryController::class,'storeCategory'])->name('category.store');