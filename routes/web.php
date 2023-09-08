<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Maritza Angel",
        "email" => "maritzaangel04@gmail.com",
        "phone" => "08763932001"
    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",        
    ]);
});


Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('/abouty', [PostController::class, 'about'])->name('about');
Route::get('/blog', [PostController::class, 'posts'])->name('posts');
