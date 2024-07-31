<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ComplaintController as AdminComplaintController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\VehicleController as AdminVehicleController;
use App\Http\Controllers\Guest\ComplaintController as GuestComplaintController;
use App\Http\Controllers\Guest\ReviewController as GuestReviewController;
use App\Http\Controllers\Guest\VehicleController as GuestVehicleController;
use App\Http\Middleware\Admin;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::prefix('admin')->group(function () {
        // Route::get('/kendaraan', [AdminVehicleController::class, 'index'])->name('kendaraaan');
        // Route::get('/kendaraan/create', [AdminVehicleController::class, 'create'])->name('kendaraaan/create');
        // Route::post('/kendaraan/post', [AdminVehicleController::class, 'post'])->name('kendaraaan/post');
        // Route::get('/kendaraan/edit', [AdminVehicleController::class, 'edit'])->name('kendaraaan/edit');
        // Route::patch('/kendaraan/update', [AdminVehicleController::class, 'update'])->name('kendaraaan/update');
        // Route::delete('/kendaraan/destroy', [AdminVehicleController::class, 'destroy'])->name('kendaraaan/destroy');

        // Route::get('/review', [AdminReviewController::class, 'index'])->name('review');
        // Route::get('/review/edit', [AdminReviewController::class, 'edit'])->name('review/edit');
        // Route::patch('/review/update', [AdminReviewController::class, 'update'])->name('review/update');
        // Route::delete('/review/destroy', [AdminReviewController::class, 'destroy'])->name('review/destroy');

        // Route::get('/pengaduan', [AdminComplaintController::class, 'index'])->name('complaint');
        // Route::get('/pengaduan/edit', [AdminComplaintController::class, 'edit'])->name('complaint/edit');
        // Route::patch('/pengaduan/update', [AdminComplaintController::class, 'update'])->name('complaint/update');
        // Route::delete('/pengaduan/destroy', [AdminComplaintController::class, 'destroy'])->name('complaint/destroy');

        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // })->middleware('Admin');
    
});

Route::prefix('/')->group(function () {
    Route::get('/review/create', [ReviewController::class, 'create'])->name('review/create');
    Route::get('/review/post', [ReviewController::class, 'post'])->name('review/post');

    Route::get('/pengaduan/create', [ComplaintController::class, 'create'])->name('complaint/create');
    Route::get('/pengaduan/post', [ComplaintController::class, 'post'])->name('complaint/post');
});

// Route::get('/review', [ReviewController::class, 'index'])->name('review');
// Route::get('/pengaduan', [ComplaintController::class, 'index'])->name('complaint');
// Route::get('/kendaraan/angkot', [VehicleController::class, 'indexAngkot'])->name('guest/kendaraan/angkot');
// Route::get('/kendaraan/angkot/{slug}', [VehicleController::class, 'detailAngkot'])->name('guest/kendaraan/angkot');
// Route::get('/kendaraan/bus', [VehicleController::class, 'indexbus'])->name('guest/kendaraan/bus');
// Route::get('/kendaraan/bus/{slug}', [VehicleController::class, 'detailBus'])->name('guest/kendaraan/bus');
// Route::get('/kendaraan/commuter', [VehicleController::class, 'indexcommuter'])->name('guest/kendaraan/commuter');
// Route::get('/kendaraan/commuter/{slug}', [VehicleController::class, 'detailCommuter'])->name('guest/kendaraan/commuter');

require __DIR__.'/auth.php';
