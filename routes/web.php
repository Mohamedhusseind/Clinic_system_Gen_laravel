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

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/doctor/login', [App\Http\Controllers\DoctorController::class, 'loginDoctor'])->name('doctor_login');
Route::post('/doctor/login', [App\Http\Controllers\DoctorController::class, 'login'])->name('loginDoctor');


Route::get('/receptionist/login', [App\Http\Controllers\ReceptionistController::class, 'login'])->name('receptionist_login');
Route::post('receptionist/login', [App\Http\Controllers\ReceptionistController::class, 'loginReceptionist'])->name('loginReceptionist');

Route::resource('doctors', App\Http\Controllers\DoctorController::class);

Route::resource('receptionists', App\Http\Controllers\ReceptionistController::class);


Route::resource('patients', App\Http\Controllers\PatientController::class);


Route::resource('invoices', App\Http\Controllers\invoiceController::class);

Route::resource('products', App\Http\Controllers\productController::class);

Route::resource('recipes', App\Http\Controllers\recipeController::class);

Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
