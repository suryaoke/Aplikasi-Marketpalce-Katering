<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestoranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
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

    Route::get('/restoran', 'all')->name('restoran');
    Route::get('/restoran/create', 'add')->name('restoran.add');
    Route::post('/restoran/store', 'create')->name('restoran.store');
    Route::get('/restoran/edit/{id}', 'edit')->name('restoran.edit');
    Route::post('/restoran/update', 'update')->name('restoran.update');
    Route::get('/restoran/customer', 'customerall')->name('customer');
});



Route::controller(MenuController::class)->middleware(['auth'])->group(function () {

    Route::get('/menu', 'all')->name('menu');
    Route::get('/menu/create', 'add')->name('menu.add');
    Route::post('/menu/store', 'create')->name('menu.store');
    Route::get('/menu/edit/{id}', 'edit')->name('menu.edit');
    Route::post('/menu/update', 'update')->name('menu.update');
    Route::get('/menu/delete/{id}', 'delete')->name('menu.delete');
    Route::get('/menu/customer/{id}', 'menucostumer')->name('menu.customer');
});


Route::controller(PesananController::class)->middleware(['auth'])->group(function () {


    Route::post('/pesan/store', 'store')->name('pesan.store');
});
