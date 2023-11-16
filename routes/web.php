<?php

use App\Http\Controllers\administration\AdministrationController;
use App\Http\Controllers\administration\GammeAdministrationController;
use App\Http\Controllers\administration\ManagementFramingTextController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\ColorationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GammeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpaHairController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/gammes/{slug}', [GammeController::class, 'index'])->name('gammes');
Route::get('/coloration', [ColorationController::class, 'index'])->name('coloration');
Route::get('/spa-cheveux', [SpaHairController::class, 'index'])->name('spa-hair');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

/*
 * Authentification
 */
Route::get('/stylelogin', [LoginController::class, 'index'])->name('login');
Route::post('/stylelogin', [LoginController::class, 'doLogin']);

/*
 * Administration
 */
Route::middleware(['auth'])->prefix('/administration')->name('admin.')->group(function () {
    Route::get('/', [AdministrationController::class, 'index'])->name('admin');
    Route::delete('/', [LoginController::class, 'logout'])->name('logout');

    Route::get('/gammes/{slug}', [GammeAdministrationController::class, 'index'])->name('gammes');

    Route::prefix('framing-text')->name('framing-text.')->group(function () {
        Route::get('/create', [ManagementFramingTextController::class, 'index'])->name('create');
        Route::post('/create', [ManagementFramingTextController::class, 'store'])->name('store');

        Route::get('/update', [ManagementFramingTextController::class, 'index'])->name('edit');
        Route::put('/update', [ManagementFramingTextController::class, 'update'])->name('update');
    });
});


