<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;

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

Route::get('/',[TodoController::class, 'home'])->name('home');
Route::post('/store',[TodoController::class, 'store']);
Route::get('/edit/{id}',[TodoController::class, 'edit'])->name('edit');

Route::get('/about',[TodoController::class,'about']);
Route::post('/delete/{todo}',[TodoController::class, 'delete'])->name('destroy');
Route::post('/update/{todo}',[TodoController::class,'update'])->name('update');
Route::get('/contact',function () {
    return view('contact');

});