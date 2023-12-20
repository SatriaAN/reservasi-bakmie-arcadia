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

// Dashboard
Route::get('/daftar-meja/tambah', function () {
    return view('dashboard.tables.tambahMeja');
})->middleware(['auth', 'verified']);
Route::get('/testimonials/tambah', function () {
    return view('dashboard.testimonials.tambahTestimonials');
})->middleware(['auth', 'verified']);
// Route::get('/daftar-reservasi/tambah', function () {
//     return view('dashboard.reservations.tambahReservasi');
// })->middleware(['auth', 'verified']);


// Admin Route
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user',[UserController::class, 'index']);
    Route::get('/laporan',[ReportController::class, 'index']);
    Route::get('/daftar-reservasi/tambah',[ReservationController::class,'create']);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('daftar-meja',TableController::class);  
    Route::resource('daftar-reservasi',ReservationController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';