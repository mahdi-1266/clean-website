<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
   return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
});

Route::middleware('auth')->group(function () {
  Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
  Route::post('/profile/store', [AdminController::class, 'StoreProfile'])->name('profile.store');
  Route::post('/admin/password/update', [AdminController::class, 'AdminUpdatePassword'])->name('admin.password.update');
});

Route::controller(BackendController::class)->group(function () {

    Route::get('all/portfolio', 'AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
    Route::post('/store/portfolio', 'StorePortfolio')->name('store.portfolio');
    Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
    Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.portfolio');
    Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
});

Route::controller(BackendController::class)->group(function(){});