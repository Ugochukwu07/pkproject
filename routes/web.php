<?php

use App\Http\Controllers\PagesController;
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
/*
Route::get('/', function () {
    return view('welcome');
    //return 'Hello World!';
}); */

Route::get('/', [PagesController::class, 'index']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/about', [PagesController::class, 'about']);

Route::resource('posts', App\Http\Controllers\PostsController::class);

/* Route::get('/hello', function () {
    return '<h1>Hello World!</h1>';
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/users/{id}', function ($id) {
    return 'This a user ' . $id;
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
