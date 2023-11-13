<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\ColorationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GammeController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login');

