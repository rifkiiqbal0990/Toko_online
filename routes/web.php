<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TrackingController;

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



               //  AUTH  //

    Route::middleware('guest')->group(function () {

      // LOGIN
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login/store', [AuthController::class,'storeLogin']);

     // REGISTER
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register/store', [AuthController::class,'storeRegister']);

});




             // PAGES ADMIN //

     Route::middleware('auth')->group(function () {



        // LOGOUT

// LOGOUT
Route::get('/logout', [AuthController::class, 'logout']);



       // DASHBOARD

// DASHBOARD
Route::get('/dashboard', [UserController::class, 'dashboard']);



       // PRODUK

// STOK PRODUK
Route::get('/stok', [ProdukController::class, 'stok']);

// KATEGORI PRODUK
Route::get('/kategori', [KategoriController::class, 'kategori']);

// TAMBAH KATEGORI
Route::get('/tambahKategori', [KategoriController::class, 'tambahKategori']);
Route::post('/storeKategori', [KategoriController::class, 'storeKategori']);

// HAPUS KATEGORI
Route::get('/destroyKategori/{id}', [KategoriController::class, 'destroyKategori']);

// TAMBAH PRODUK
Route::get('/tambah', [ProdukController::class, 'tambah']);
Route::post('/store', [ProdukController::class, 'store']);

// EDIT PRODUK
Route::get('/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/update/{id}', [ProdukController::class, 'update']);

// HAPUS PRODUK
Route::get('/destroy/{id}', [ProdukController::class, 'destroy']);



      // MANAJEMEN

// PROSES PENJUALAN
Route::get('/order', [OrderController::class, 'order']);

// EDIT PENJUALAN
Route::get('/updatePenjualan/{id}', [OrderController::class, 'updatePenjualan']);
Route::post('/update/{id}', [OrderController::class, 'update']);

// tracking penjualan / admin
Route::get('/tracking/{id}', [TrackingController::class, 'tracking']);



    // FORM

// LAPORAN PENJUALAN
Route::get('/showLaporan', [LaporanController::class, 'showLaporan']);
Route::get('/laporan', [LaporanController::class, 'tambahLaporan']);
Route::post('/storeLaporan', [LaporanController::class, 'storeLaporan']);


     });




     Route::middleware('auth')->group(function () {



             // PAGES USER //
 // home
Route::get('/', [ShopController::class, 'home']);

// shop
Route::get('/shop', [ShopController::class, 'shop']);

// shop/kategori
Route::get('/kategori/{kategori}', [ProdukController::class, 'shopKategori'])->name('kategori.shopKategori');


// shop detail
Route::get('/shopDetail/{id}', [ShopController::class, 'shopDetail']);

// store to keranjang
Route::post('/storeKeranjang', [ShopController::class, 'storeKeranjang']);

// keranjang
Route::get('/keranjang', [ShopController::class, 'keranjang']);
Route::get('/destroyKeranjang/{id}', [ShopController::class, 'destroyKeranjang']);

// checkout
Route::get('/checkout', [ShopController::class, 'checkout']);
Route::post('/storeCheckout', [ShopController::class, 'storeCheckout']);

// dikemas
Route::get('/dikemas', [ShopController::class, 'dikemas']);

// profile
Route::get('/profile', [UserController::class, 'profile']);


// about
Route::get('/about', function () {
    return view('pagesUsers.about.about');
});


// history
Route::get('/history', function () {
    return view('pagesUsers.belanja.history');
});


// tracking penjualan / users
Route::get('/trackingUsers', function () {
    return view('pagesUsers.belanja.trackingUsers');
});

    });