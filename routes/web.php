<?php

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

Auth::routes();

// Route::get('/', function () {
//     return redirect()->route('login');
// });
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/project', [App\Http\Controllers\HomeController::class, 'index'])->name('project');
    Route::post('/change_password', [App\Http\Controllers\HomeController::class, 'change_password'])->name('change_password');
});

Route::post('/track-event', [App\Http\Controllers\WelcomeController::class, 'trackEvent'])->name('track.event');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome']);
Route::get('/aboutus', [App\Http\Controllers\WelcomeController::class, 'welcomeAboutUs']);
Route::get('/contactus', [App\Http\Controllers\WelcomeController::class, 'welcomeContactUs']);
Route::get('/term', [App\Http\Controllers\WelcomeController::class, 'welcomeTerm']);
Route::get('/privacy', [App\Http\Controllers\WelcomeController::class, 'welcomePrivacy']);
Route::get('/category/{category_name}', [App\Http\Controllers\WelcomeController::class, 'welcomeCategory'])->where('category_name', '[a-z0-9-]+');;
Route::get('/{id}', [App\Http\Controllers\WelcomeController::class, 'welcomeDescription']);

