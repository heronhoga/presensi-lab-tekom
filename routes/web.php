<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    if (Auth::check()) {
        return Auth::user()->role_id == 1 ? redirect('/admin') : redirect('/dashboard');
    }
    return redirect('/login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/presensi/lab/{lab}', [PresensiController::class, 'index'])->name('presensi.index');
Route::post('/presensi/lab/{lab}', [PresensiController::class, 'present'])->name('presensi.present');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/data', [DataController::class, 'index'])->name('admin.data');
    // Route::resource('/dashboard', );
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';