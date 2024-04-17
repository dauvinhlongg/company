<?php

use App\Http\Controllers\CategoryConTroller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('getPost' ,[PostController::class, 'getPosts']);
// Route::get('getCategories' ,[PostController::class, 'getCategories']);
// Route::get('chao/{user}', function($user){
//     return view('hello-user',['user'=>$user 
// ]);
// });
// Route::get('/categories', [CategoryConTroller::class, 'index']);
// Route::get('posts', [PostController::class, 'getPosts']);
// Route::get('category',[CategoryConTroller::class,'getCategories']);
    
// Route::get('/',[PostController::class, 'index']);
// Route::get('/', [IndexController::class, 'index']);
// Route::get('/post/{id}', 'PostController@show');
Route::get('/home', [PostController::class, 'home'])->name('home');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
