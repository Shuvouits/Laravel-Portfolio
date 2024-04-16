<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('Frontend.index');
});


Route::get('/dashboard', function () {
    return view('Backend.page.dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/logout', [AuthController::class, 'Logout']);
    Route::get('/admin/hero', [AdminController::class, 'Hero']);
    Route::post('/admin/add-hero', [AdminController::class, 'AddHero']);
    Route::post('/admin/update-hero', [AdminController::class, 'UpdateHero']);
    Route::delete('/admin/delete-hero/{id}', [AdminController::class, 'DeleteHero']);



    Route::get('/admin/icon-box', [AdminController::class, 'IconBox']);
    Route::post('/admin/add-iconbox', [AdminController::class, 'AddIconBox']);
    Route::post('/admin/update-iconbox', [AdminController::class, 'UpdateIconBox']);
    Route::delete('/admin/delete-iconbox/{id}', [AdminController::class, 'DeleteIconBox']);
});


require __DIR__.'/auth.php';
