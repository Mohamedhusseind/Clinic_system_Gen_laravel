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

<<<<<<< HEAD
Route::resource('doctors', App\Http\Controllers\DoctorController::class)->middleware('auth:web');
=======
Route::get('/doctor/login', [App\Http\Controllers\DoctorController::class, 'loginDoctor'])->name('doctor_login');
Route::post('/doctor/login', [App\Http\Controllers\DoctorController::class, 'login'])->name('loginDoctor');


Route::get('/receptionist/login', [App\Http\Controllers\ReceptionistController::class, 'login'])->name('receptionist_login');
Route::post('receptionist/login', [App\Http\Controllers\ReceptionistController::class, 'loginReceptionist'])->name('loginReceptionist');

    Route::resource('doctors', App\Http\Controllers\DoctorController::class);

Route::resource('receptionists', App\Http\Controllers\ReceptionistController::class);

>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72

Route::resource('receptionists', App\Http\Controllers\ReceptionistController::class)->middleware('auth:web');

Route::resource('invoices', App\Http\Controllers\invoiceController::class)->middleware('auth:web');

Route::resource('products', App\Http\Controllers\productController::class)->middleware('auth:web');

Route::resource('recipes', App\Http\Controllers\recipeController::class)->middleware('auth:web');

Route::resource('appointments', App\Http\Controllers\AppointmentController::class)->middleware('auth:web');

<<<<<<< HEAD
Route::resource('patients', App\Http\Controllers\patientController::class)->middleware('auth:web');
=======
Route::resource('appointments', App\Http\Controllers\AppointmentController::class);


Route::resource('reseptionists', App\Http\Controllers\ReseptionistController::class);
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
