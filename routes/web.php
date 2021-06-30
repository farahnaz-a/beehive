<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
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



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('/banner', function(){
    return view('admin.banners.index');
})->name('banners.index');

Route::get('/banner/edit', function(){
    return view('admin.banners.edit');
})->name('banners.edit');

