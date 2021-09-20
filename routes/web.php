<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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



//Route of categories:
Route::get('create_c',[CategoryController::class,'create'])->name('create_c');


Route::post('store',[CategoryController::class,'store'])->name('store');


Route::get('categories_list',[CategoryController::class,'index'])->name('categories_list');


Route::delete('delete/{id}',[CategoryController::class,'destroy'])->name('delete');


Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');


Route::put('update/{id}',[CategoryController::class,'update'])->name('update');

//Route of posts:
Route::group(['middleware'=>'auth'],function(){
Route::get('create_p',[PostController::class,'create'])->name('create_p');

Route::get('create_p',[PostController::class,'index'])->name('create_p');


Route::post('storePost',[PostController::class,'store'])->name('storePost');

Route::get('Post_lists',[PostController::class,'indexPost'])->name('Post_lists');

Route::get('Post_details/{id}',[PostController::class,'details'])->name('Post_details');

Route::delete('deleteList/{id}',[PostController::class,'destroyPost'])->name('deleteList');

Route::get('edit_post/{id}',[PostController::class,'editPost'])->name('edit_post');



Route::put('updatepost/{id}',[PostController::class,'updatePost'])->name('updatepost');

});

Route::get('/',[PostController::class,'home'])->name('home');

Auth::routes();



