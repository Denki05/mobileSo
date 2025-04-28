<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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
    return redirect()->guest(route('login'));
});

// GET API
Route::get('/product', [ApiController::class, 'getItemsProducts'])->name('product');
Route::get('/brands', [ApiController::class, 'getItemsBrands'])->name('brands');

// Route for fetching products based on brand ID (for dependent dropdown)
Route::get('/product/brand/{brand}', [ApiController::class, 'getProductsByBrand']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // Master
    Route::prefix('master')->name('master.')->group(function () {
        Route::get('produk', [\App\Http\Controllers\Master\ProductController::class, 'index'])->name('produk');
        // Tambahkan route master lainnya di sini bila perlu
    });

    // Penjualan
    Route::prefix('penjualan')->name('penjualan.')->group(function () {
        Route::get('order', function () {
            return view('penjualan.order.index');
        })->name('order');
    });

    // Pengaturan
    Route::prefix('pengaturan')->name('pengaturan.')->group(function () {
        Route::get('setting', function () {
            return view('pengaturan.setting.index');
        })->name('setting');
    });

});

require __DIR__.'/auth.php';
