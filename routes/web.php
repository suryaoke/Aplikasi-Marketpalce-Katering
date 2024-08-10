<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestoranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

use App\Http\Controllers\UserController;

Route::controller(AdminController::class)->middleware(['auth'])->group(function () {

    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});



Route::controller(RestoranController::class)->middleware(['auth'])->group(function () {

    Route::get('/restosan', 'all')->name('restoran');
    Route::get('/restosan/create', 'add')->name('restoran.add');
    Route::post('/restosan/store', 'create')->name('restoran.store');
    Route::get('/restosan/edit', 'edit')->name('restoran.edit');
    Route::post('/restosan/update', 'update')->name('restoran.update');
});
