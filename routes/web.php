<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.dashboard');
});
// Route::get('/pasien', function () {
//     return view('home.pasien');
// });

// route resource for patient
Route::resource('patient', PatientController::class);
// Route::resource('home.dashboard', PatientController::class);

// Route::get('/pasien', [PatientController::class, 'index'])->name('patient.index');
// Route::get('/pasien/create', [PatientController::class, 'create'])->name('patient.create');
// Route::post('/pasien', [PatientController::class, 'store'])->name('patient.store');

