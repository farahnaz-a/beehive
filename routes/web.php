<?php

use App\Http\Controllers\WorkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WorkStepController;
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');



// Admin Prefix 
Route::group(['prefix' => 'admin'], function (){

    //AdminController
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    
    //BannerController
    Route::resource('banners', BannerController::class);

    //WorkController
    Route::resource('works', WorkController::class);

    //WorkStepsController
    Route::resource('workSteps', WorkStepController::class);


});




// Route::get('/banner', function(){
//     return view('admin.banners.index');
// })->name('banners.index');

// Route::get('/banner/edit', function(){
//     return view('admin.banners.edit');
// })->name('banners.edit');

