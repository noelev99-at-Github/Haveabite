<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\OrdersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//AUTHENTICATION ROUTES
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//PROFILE ROUTES & Edit/Update Operation
Route::get('profile', [CustomAuthController::class, 'profile']);
Route::post('profile-update/{id}', [CustomAuthController::class, 'update']);


// FOOD STUFF ROUTES
Route::get('seller', [FoodsController::class, 'seller'])->name('seller');
Route::get('main_menu', [FoodsController::class, 'main_menu'])->name('main_menu');


//FOOD ITEMS CRUD Operations
Route::post('store_item', [FoodsController::class, 'store_item'])->name('store_item');
Route::get('delete-item/{id}', [FoodsController::class, 'destroy']);
Route::post('update-item/{id}', [FoodsController::class, 'update']);

//ORDER ROUTES
Route::post('create-order/{id}', [OrdersController::class, 'create_order']);
Route::get('cancel-order/{id}', [OrdersController::class, 'cancel']);
Route::post('main', [OrdersController::class, 'main'])->name('main')->name('main');
Route::get('my_orders', [OrdersController::class, 'my_orders'])->name('my_orders');
Route::get('incoming_orders', [OrdersController::class, 'incoming_orders'])->name('incoming_orders');
Route::get('update-order/{id}', [OrdersController::class, 'update_order']);
