<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PanelController;

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

// routes/web.php

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		return View::make('pages.home.index');
	})->name('page.home');

	Route::get(LaravelLocalization::transRoute('routes.faq'),function(){
		return View::make('pages.faq.index');
	})->name('page.faq');

    Route::get(LaravelLocalization::transRoute('routes.before-after'),function(){
		return View::make('pages.before-after.index');
	})->name('page.before-after');

    Route::post('/post-request', [PostController::class, 'sendMail'])->name('page.post');
});

Route::get('/login', [PanelController::class, 'view'])->name('page.login');
Route::post('/login', [PanelController::class, 'login'])->name('page.login.post');
Route::get('/dashboard', [PanelController::class, 'dashboard']);
Route::get('/signout', [PanelController::class, 'signOut'])->name('page.dash.signout');
