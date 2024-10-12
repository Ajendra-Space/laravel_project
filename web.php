<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
use App\Http\Middleware\CustomAuth;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware'=>"web"], function(){
Route::get('/', [RestoController::class, 'index']);
Route::get('/login', [RestoController::class, 'login']);
Route::get('/checklist', [RestoController::class, 'checklist']);
Route::post('/add', [RestoController::class, 'add']);
Route::get('/delete/{id}', [RestoController::class, 'delete']);
Route::get('/edit/{id}', [RestoController::class, 'edit']);
Route::post('/edit/{id}', [RestoController::class, 'update']);
Route::view('register','register');
Route::post('/register', [RestoController::class, 'register']);
Route::view('login','login');
Route::post('/login', [RestoController::class, 'login']);
Route::view('add','add');
});

Route::post('/logout', [RestoController::class, 'logout'])->name('logout');





