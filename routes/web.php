<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BeforeAfterController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'view'])->name('page.home');
    Route::get('/faq', [FaqController::class, 'view'])->name('page.faq');
    Route::get('/before-after', [BeforeAfterController::class, 'view'])->name('page.before-after');

Route::post('/post-request', [PostController::class, 'sendMail'])->name('page.post');
