<?php

use App\Http\Controllers\PayPalController; 
use App\Http\Livewire\Shop\CheckoutComponent;
use App\Http\Livewire\Shop\Cart\IndexComponent as CartIndexComponent;
use App\Http\Livewire\Shop\IndexComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Shop\SearchComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', IndexComponent::class)->name('shop.index'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cart', CartIndexComponent::class)->name('cart');

Route::get('/search', SearchComponent::class)->name('product.index');

Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/paypal/checkout/{order}', [PayPalController::class, 'getExpressCheckout'])->name('paypal.checkout');
Route::get('/paypal-success/{order}', [PayPalController::class, 'getExpressCheckoutSuccess'])->name('paypal.success');
Route::get('/paypal-cancel', [PayPalController::class, 'calcelPage'])->name('paypal.cancel');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
