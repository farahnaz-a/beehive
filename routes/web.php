<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrickController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WorkStepController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PricefreeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PricepremiumController;

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
Route::get('/project/{id}/details', [FrontendController::class, 'details'])->name('project.details');
Route::get('/make-a-deposit', [FrontendController::class, 'makeDeposit'])->name('make.deposit');
Route::get('/city-details/{country}-{name}', [FrontendController::class, 'cityDetails'])->name('city.details');

// MollieController
Route::any('/mollie-payment',[MollieController::class, 'preparePayment'])->name('mollie.payment');
Route::name('webhooks.mollie')->post('webhooks/mollie', [MollieController::class, 'handle']);
Route::get('/payment-success', [MollieController::class, 'paymentSuccess'])->name('payment.success');
// MollieController ENDS

// BrickController 
Route::post('/brick-buy', [BrickController::class, 'store'])->name('bricks.store');

// Admin Prefix 
Route::group(['prefix' => 'admin'], function (){

    //AdminController
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/delete/{id}/user', [AdminController::class, 'delete'])->name('user.delete');
    
    //BannerController
    Route::resource('banners', BannerController::class);

    //WorkController
    Route::resource('works', WorkController::class);

    //WorkStepsController
    Route::resource('workSteps', WorkStepController::class);

    //PortfolioController
    Route::get('update-multiple-image/{id}/update', [PortfolioController::class, 'updateMultiple'])->name('update.multiple');
    Route::post('replace-multiple-image/update', [PortfolioController::class, 'replaceMultiple'])->name('replace.multiple');
    Route::resource('portfolios', PortfolioController::class);

    //TestimonialController
    Route::resource('testimonials', TestimonialController::class);

    //PricefreeController
    Route::resource('pricefrees', PricefreeController::class);

    //PricepremiumController
    Route::resource('pricepremiums', PricepremiumController::class);

    //FaqController
    Route::resource('faqs', FaqController::class);

    //InvestController
    Route::resource('invests', InvestController::class);

    //CityController 
    Route::resource('cities', CityController::class);


});

// Customer Prefix
Route::group(['prefix' => 'customer'], function () {

    //CustomerController 
    Route::get('/dashboard', [CustomerController::class, 'index'])->name('customer.index');
    Route::post('/customer-info', [CustomerController::class, 'customerInfo'])->name('customer.information');
    Route::post('/customer-doc', [CustomerController::class, 'customerDoc'])->name('customer.doc');
    Route::get('/documents', [CustomerController::class, 'customerDocuments'])->name('customer.document');
    Route::get('/thankyou', [CustomerController::class, 'complete'])->name('customer.thanks');
    Route::get('/account', [CustomerController::class, 'account'])->name('customer.dashboard');

});

// GoogleController
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

