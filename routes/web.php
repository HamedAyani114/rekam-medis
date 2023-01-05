<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PolyController;

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
    return view('dashboard.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/login', function () {
    return view('login.index');
});
Route::get('/poli', function () {
    return view('polies.index');
});


// route resource for patient poli, doctor
Route::resource('patient', PatientController::class);
Route::resource('poli', PolyController::class);

Route::resource('doctor', DoctorController::class);
// Route::resource('home.dashboard', PatientController::class);

// Route::get('/pasien', [PatientController::class, 'index'])->name('patient.index');
// Route::get('/pasien/create', [PatientController::class, 'create'])->name('patient.create');
// Route::post('/pasien', [PatientController::class, 'store'])->name('patient.store');

