<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

use App\Http\Controllers\HomeController;

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
    return view('welcome'); 
});

// Route::get('/home',function(){
//     return "<h2>Welcome To My Site</h2>";
// });

// Route::get('/post/{post}', function () {
//     return view('about');
// })->name('post.show');


Route::get("/home",[HomeController::class, 'home']);

Route::get("/about",[HomeController::class, 'about']);

Route::get('/contact',[HomeController::class, 'contact']);

Route::get('/user/{id}', [PostsController::class, 'site']);

Route::resource('/post', PostsController::class);
//// ----- ----- ----

// Route::get('/user/{id}', [UserController::class, 'show']);


// use App\Http\Controllers\PhotoController;

// Route::resource('photos', PhotoController::class);


// Route::resources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);


// use App\Http\Controllers\PhotoCommentController;

// Route::resource('photos.comments', PhotoCommentController::class);

// Route::resource('photos.comments', CommentController::class)->shallow();

