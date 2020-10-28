<?php

use App\Http\Controllers\PostController;
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
    $post = App\Models\Post::all();
    return view('index',compact('post'));
});
Route::post('/add-post',[PostController::class,'storePost']);
Route::get('/add-post-page',[PostController::class,'addPost']);
Route::get('/edit-post/{title}',[PostController::class,'editPost']);
Route::post('/update-post/{title}',[PostController::class,'updatePost']);
Route::get('/delete-post/{title}',[PostController::class,'deletePost']);
