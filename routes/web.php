<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\AuthAccess;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return abort(404);
});

Route::get('/', [AuthController::class, 'index'])->name('auth.index')->middleware(AuthAccess::class);

Route::prefix('/user')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register')->middleware(AuthAccess::class);
    Route::post('/create', [AuthController::class, 'create'])->name('auth.create')->middleware(AuthAccess::class);
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::prefix('/admin')->group(function () {
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/home', [PageController::class, 'home'])->name('page.home');
Route::get('/myreservations', [PageController::class, 'myReservations'])->name('page.myreservations');
Route::post('/reservation', [ReservationController::class, 'create'])->name('reservation.create');
