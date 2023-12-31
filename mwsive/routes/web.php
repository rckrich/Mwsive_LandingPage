<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/our_story', [LandingController::class, 'our_story'])->name('landing.our_story');
Route::get('/faq', [LandingController::class, 'faq'])->name('landing.faq');
Route::get('/links', [LandingController::class, 'tc'])->name('landing.tc');

