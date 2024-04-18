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

    Route::get('/admin/work-experience', [AdminController::class, 'WorkExperience']);
    Route::post('/admin/add-experience', [AdminController::class, 'AddExperience']);
    Route::post('/admin/update-experience', [AdminController::class, 'UpdateExperience']);
    Route::delete('/admin/delete-experience/{id}', [AdminController::class, 'DeleteExperience']);

    Route::get('/admin/technology', [AdminController::class, 'Technology']);
    Route::post('/admin/add-technology', [AdminController::class, 'AddTechnology']);
    Route::post('/admin/update-technology', [AdminController::class, 'UpdateTechnology']);
    Route::delete('/admin/delete-technology/{id}', [AdminController::class, 'DeleteTechnology']);

    Route::get('/admin/faq', [AdminController::class, 'FAQ']);
    Route::post('/admin/add-faq', [AdminController::class, 'AddFAQ']);
    Route::post('/admin/update-faq', [AdminController::class, 'UpdateFAQ']);
    Route::delete('/admin/delete-faq/{id}', [AdminController::class, 'DeleteFAQ']);

    Route::get('/admin/stack', [AdminController::class, 'STACK']);
    Route::post('/admin/add-stack', [AdminController::class, 'AddStack']);
    Route::post('/admin/update-stack', [AdminController::class, 'UpdateStack']);
    Route::delete('/admin/delete-stack/{id}', [AdminController::class, 'DeleteStack']);

    Route::get('/admin/product', [AdminController::class, 'Product']);
    Route::post('/admin/add-product', [AdminController::class, 'AddProduct']);
    Route::post('/admin/update-product', [AdminController::class, 'UpdateProduct']);
    Route::delete('/admin/delete-product/{id}', [AdminController::class, 'DeleteProduct']);


});


require __DIR__.'/auth.php';
