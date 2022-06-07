<?php

use App\Http\Controllers\RotiController;
use App\Http\Controllers\SelaiController;
use App\Http\Controllers\OrderanController;
use App\Http\Controllers\ProdukController;
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
    return view('index');
});

Route::get('/nineselai', [ProdukController::class, 'nineselai'])->name('nineselai');
Route::post('/nineorder', [ProdukController::class, 'nineorder'])->name('nineorder');

Route::post('/pesan', [OrderanController::class, 'store'])->name('pesan');


Route::get('/oneselai', [ProdukController::class, 'oneselai']);


Route::get('/shop', [ProdukController::class, 'show'])->name('shop');
Route::get('/order/{id}', [ProdukController::class, 'show2'])->name('order');

Route::get('/play', [ProdukController::class, 'show'])->name('shop');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
