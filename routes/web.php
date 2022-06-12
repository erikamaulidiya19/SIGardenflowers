<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\KomController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;
use App\Http\Controllers\PesanController;




Route::get('/', function () {
    return view('index');
});
Route::get('/index',[userController::class,'index']);
Route::get('/confir',[userController::class,'confir']);
Route::get('/user',[userController::class,'user']);
Route::get('/admin',[adminController::class,'admin'])->name('admin');
Route::get('/adminlaptop',[KomController::class,'laptop_backend']);
Route::get('/adminuser',[adminController::class,'viewuser']);

Route::get('/login',[loginController::class,'login']);
Route::get('/regis',[regisController::class,'regis']);
Route::post('/regis-user', [regiscontroller::class, 'store']);
Route::post('/login-user',[loginController::class,'aunt']);
Route::post('/logout',[loginController::class,'logout']);
Route::post('/storepesanan',[PesanController::class,'store']);


Route::get('/laptop',[KomController::class,'laptop']);
Route::get('/tabellaptop',[KomController::class,'datalaptop']);
Route::get('/insertlaptop',[KomController::class,'viewinsert']);
Route::post('/datalaptop',[KomController::class,'tambahlaptop']);
Route::post('deletelaptop/{id_laptop}',[KomController::class,'hapuslaptop']);
Route::get('updatelaptop/{id_laptop}',[KomController::class,'editlaptop']);
// Route::get('confir',[KomController::class,'acc']);


Route::get('/pesan/{id}',[PesanController::class,'index']);
Route::get('/beli/{id}',[PesanController::class,'cek']);
