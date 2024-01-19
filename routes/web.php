<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HasilController;
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
Route::resource('/', HomeController::class);
Route::resource('hasil', HasilController::class);
Route::resource('home', HomeController::class);

Route::get('/reservasi', function () {
    return view('landingpage.hasil-reservasi');
});

// Dashboard
Route::get('/daftar-meja/tambah', function () {
    return view('dashboard.tables.tambahMeja');
})->middleware(['auth', 'verified']);
Route::get('/testimonials/tambah', function () {
    return view('dashboard.testimonials.tambahTestimonials');
})->middleware(['auth', 'verified']);
Route::get('/daftar-reservasi/tambah', function () {
    return view('dashboard.reservations.tambahReservasi');
})->middleware(['auth', 'verified']);


// // Admin Route
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //User
    Route::get('/user',[UserController::class, 'index']);

    //Laporan
    Route::get('/laporan',[ReportController::class, 'index']);

    //Dashboard
    Route::resource('/dashboard', DashboardController::class);

    //Reservasi
    Route::resource('daftar-reservasi',ReservationController::class);
    Route::put('/daftar-reservasi/{id}/accept', [ReservationController::class, 'accept'])->name('daftar-reservasi.accept');
    Route::put('/daftar-reservasi/{id}/reject', [ReservationController::class, 'reject'])->name('daftar-reservasi.reject');

    //Testimoni
    Route::resource('testimonials', TestimonialController::class);

    //Daftar Meja
    Route::resource('daftar-meja',TableController::class);

    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';