<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Landing page
Route::get('/', function () {
    return view('landingpage.home');
});
Route::get('/home', function () {
    return view('landingpage.home');
});
Route::get('/daftar-meja/tambah', function () {
    return view('dashboard.tables.tambahMeja');
});


// Dashboard
Route::get('/user',[UserController::class, 'index']);
Route::get('/testimonials',[TestimonialController::class, 'index']);

Route::resource('daftar-meja',TableController::class);

Route::get('/daftar-reservasi',[ReservationController::class, 'index']);
Route::get('/laporan',[ReportController::class, 'index']);



// Admin Route
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';