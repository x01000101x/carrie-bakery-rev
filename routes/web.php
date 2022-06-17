<?php

use App\Http\Controllers\RotiController;
use App\Http\Controllers\SelaiController;
use App\Http\Controllers\OrderanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SliderController;
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


//Firewall Here
Route::get('/', [SliderController::class, 'index']);
Route::get('/shop', [ProdukController::class, 'show'])->name('shop');
Route::get('/breads', [OrderanController::class, 'breads'])->name('breads');
Route::get('/indonesian', [OrderanController::class, 'indonesian'])->name('indonesian');
Route::get('/beverages', [OrderanController::class, 'beverages'])->name('beverages');
Route::get('/jams', [OrderanController::class, 'jams'])->name('jams');
Route::get('/order/{id}', [ProdukController::class, 'show2'])->name('order');
Route::post('/pesan', [OrderanController::class, 'store'])->name('pesan');
Route::post('/confirm', [OrderanController::class, 'confirm'])->name('confirm');
Route::post('/checkout', [OrderanController::class, 'checkout'])->name('checkout');



//Lgarin Here
Route::get('/nineselai', [ProdukController::class, 'nineselai'])->name('nineselai');
Route::post('/nineorder', [ProdukController::class, 'nineorder'])->name('nineorder');
Route::get('/oneselai', [ProdukController::class, 'oneselai']);
Route::get('/play', [ProdukController::class, 'show']);
Route::get('/rotisobek', [ProdukController::class, 'show_sobek']);
Route::any('/chekout', [ProdukController::class, 'lgarinchekout']);

//Vendor Here
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
