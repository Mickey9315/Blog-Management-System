<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/dashboard', function () {

    return view('admin.dashboard');
})->name('dashboard');

//login
Route::get('login', [RegisterController::class, 'index'])->name('login');
Route::post('post-login', [RegisterController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [RegisterController::class, 'registration'])->name('register');
Route::post('post-registration', [RegisterController::class, 'postRegistration'])->name('register.post'); 

// post
Route::get('postList',[PostController::class,'showPostLists'])->name('post.list');
Route::get('create',[PostController::class,'createPost'])->name('post.create');
Route::post('store',[PostController::class,'storePost'])->name('post.store');
Route::get('editPost/{id}',[PostController::class,'editPost'])->name('post.edit');
Route::put('updatePost/{id}',[PostController::class,'updatePost'])->name('post.update');
Route::get('deletePost/{post_id}',[PostController::class,'deletePost'])->name('post.delete');


//category
Route::get('categoryList',[CategoryController::class,'showCategoryList'])->name('category.list');
Route::get('/createCategory',[CategoryController::class,'createCategory'])->name('createCategory');
Route::post('storeCategory',[CategoryController::class,'storeCategory'])->name('category.store');
Route::get('editCategory/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
Route::put('updateCategory/{id}',[CategoryController::class,'updateCategory'])->name('category.update');

//frontend routes

Route::get('/',[HomeController::class,'home']);
Route::get('/details',[HomeController::class,'postDetails'])->name('postDetails');