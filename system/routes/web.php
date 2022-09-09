<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminKomenController;
use App\Http\Controllers\KomenController;





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

Route::get('index', function () {
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/shop-detail', function () {
    return view('shop-detail');
});

Route::get('/shop', function () {
    return view('shop');
});
Route::get('/blog', function (){
    return view('blog');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/template', function () {
    return view('template.base');
});

Route::get('/base', function () {
    return view('template.base');
});

Route::get('/blog', [ClientController::class, 'showBlog']);

Route::get('/beranda', [HomeController::class, 'showBeranda']);
Route::get('/kategori', [HomeController::class, 'showKategori']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter',[ProdukController::class,'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('komentar',AdminKomenController::class);
});

Route::resource('komentar',KomenController::class);



Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::get('/logout', [AuthController::class, 'logout']);



