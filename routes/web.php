<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ArtikelPublicController;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\DashboardAdminController;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
})->name('landing'); 
Route::get('/landing', [LandingPageController::class, 'index']);

Route::get('/artikel', [ArtikelPublicController::class, 'artikel'])->name('artikel');
Route::post('/artikel', [ArtikelPublicController::class, 'search'])->name('search');

Route::get('/BacaSelengkapnya', [BacaController::class, 'index'])->name('BacaSelengkapnya');

Route::get('/DashboardAdmin', [DashboardAdminController::class, 'index'])->name('DashboardAdmin');
/*Route::get('/DashboardAdmin', function () {
    return view('DashboardAdmin');
});*/


/*Route::resource('artikel', ArtikelController::class);*/