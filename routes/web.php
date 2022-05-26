<?php

use App\Http\Controllers\frontend\JournalsUsingMhController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::get('/journals-using-mh', [\App\Http\Controllers\frontend\JournalsUsingMhController::class, 'index'])->name('journals-using-mh');
Route::get('/{companName}/{seo}/esubmit-registraion',[App\Http\Controllers\frontend\LoginController::class, 'show_register_form'])->name('show_register_form');
Route::post('/do-register',[App\Http\Controllers\frontend\LoginController::class, 'register'])->name('do-register');
Route::get('/{company}/{seo}', [App\Http\Controllers\frontend\LoginController::class, 'show_login'])->name('login');
Route::post('/do-login', [App\Http\Controllers\frontend\LoginController::class, 'login'])->name('do-login');

// Route::middleware('auth')->group(function(){

   Route::get('/home', [App\Http\Controllers\frontend\FrontendDashboardController::class, 'index'])->name('dashboard-home');

// });
// Route::get('/submit-online', [\App\Http\Controllers\frontend\JournalsUsingMhController::class, 'submit_online'])->name('submit-online');



// Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::group(['prefix' => 'admin'], function () {

//     Route::group(['middleware' => 'admin.guest'], function () {

//         Route::view('Login', 'admin.login')->name('admin.login');
//         Route::post('Login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth');
//     });


  
//     Route::group(['middleware' => 'admin.auth'], function () {

//         Route::get('admin.home', [App\Http\Controllers\AdminController::class, 'adminhome'])->name('admin.home');

//    });
     
//    Route::get('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

// });
