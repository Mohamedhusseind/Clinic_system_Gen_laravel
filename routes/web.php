<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('profile',[HomeController::class,'profile'])->name('profile')->middleware('auth');

Route::resource('doctors', App\Http\Controllers\DoctorController::class)->middleware('auth:web');

Route::resource('receptionists', App\Http\Controllers\ReceptionistController::class)->middleware('auth:web');

Route::resource('invoices', App\Http\Controllers\invoiceController::class)->middleware('auth:web');

Route::resource('products', App\Http\Controllers\productController::class)->middleware('auth:web');

Route::resource('recipes', App\Http\Controllers\recipeController::class)->middleware('auth:web');

Route::resource('appointments', App\Http\Controllers\AppointmentController::class)->middleware('auth:web');

Route::resource('patients', App\Http\Controllers\patientController::class)->middleware('auth:web');
