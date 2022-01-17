<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'index'])->name('index');
Route::get('/products', [ProjectController::class,'products'])->name('products');
Route::get('/single_product', function () {
    return view('single-product');
})->name('single_product');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/newest', [ProjectController::class, 'newest'])->name('newest');
Route::get('/lowest_price', [ProjectController::class, 'lowest_price'])->name('lowest_price');
Route::get('/hight_price', [ProjectController::class, 'hight_price'])->name('hight_price');
Route::get('/men', [ProjectController::class, 'men'])->name('men');
Route::get('/women', [ProjectController::class, 'women'])->name('women');



Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/add_to_cart',[CartController::class,'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart',function(){
    return view('index');
});
Route::post('/remove_from_cart',[CartController::class,'remove_from_cart'])->name('remove_from_cart');
Route::get('/remove_from_cart',function(){
    return view('index');
});
Route::post('/edit_product_quantity',[CartController::class,'edit_product_quantity'])->name('edit_product_quantity');
Route::get('/edit_product_quantity',function(){
    return view('index');
});
Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
Route::post('/place_order',[OrderController::class,'place_order'])->name('place_order');
Route::get('/place_order',function(){
    return view('/');
});
Route::get('/payment',[OrderController::class,'payment'])->name('payment');
