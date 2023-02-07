<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/adres-gir', [\App\Http\Controllers\AddressController::class, 'show'])->name('address');
Route::post('/adres-gir', [\App\Http\Controllers\AddressController::class, 'store'])->name('address.action');
Route::get('/adres-onayla/{id}', [\App\Http\Controllers\AddressController::class, 'approve'])->name('address.approve');
Route::get('/adresler', [\App\Http\Controllers\AddressController::class, 'index'])->name('addresses');
