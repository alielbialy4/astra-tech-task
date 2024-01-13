<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


// Routes of Import
Route::get('/import/view' , [UserController::class,'importView'])->name('import.view');
Route::post('/import' , [UserController::class,'import'])->name('import.users');

// Routes of Export
Route::get('/export/view' , [UserController::class,'exportView'])->name('export.view');
Route::post('/export' , [UserController::class,'export'])->name('export.users');
