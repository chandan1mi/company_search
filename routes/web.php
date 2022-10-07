<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/autocomplete-search', [CompanyController::class, 'autocompleteSearch']);
    Route::get('/update-company-details', [CompanyController::class, 'show'])->name('search_companies');
    Route::post('/update-company', [CompanyController::class, 'update'])->name('update_company');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
