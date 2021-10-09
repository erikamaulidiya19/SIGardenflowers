<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


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

Route::get('/index', function () {
    return view('index');
});
Route::get('/user',[userController::class,'user']);

// Route::get('/user', function () {
//     return view('user');
// });

// Route::get('/', function () {
//     return view('blog');
// });

// Route::get('/', function () {
//     return view('category');
// });

// Route::get('/', function () {
//     return view('contact');
// });

// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/', function () {
//     return view('search');
// });
