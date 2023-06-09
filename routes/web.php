<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormInputController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;

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

//me-routing dirinya sendiri
Route::get('/salam', function() {
    return 'Assalamualaikum';
});

//routing mengarahkan ke view
Route::get('/hallo', function() {
    return view ('hallo');
});

Route::get('/hallo2', function () {
    return view ('hallo.halloworld');
});

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'store']);

Route::get('/kesehatan', function () {
    return view ('kesehatan.formkesehatan');
});

//Praktikum 9
Route::get('/praktikum9', [FormInputController::class, 'index']);
Route::get('/praktikum9', [FormInputController::class, 'array']);
Route::post('/hasilprak9', [FormInputController::class, 'hasil']);

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/produk', [ProdukController::class, 'index']);
// });

//Praktikum 10 CRUD
Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::post('/produk/update', [ProdukController::class, 'update']);
Route::get('/produk/view/{id}', [ProdukController::class, 'view'])->name('produk.view/{id}');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk/edit/{id}');
});

Route::get('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk/delete/{id}');
Route::get('/kategori', [KategoriProdukController::class, 'index'])->name('kategori');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');

//Praktikum Membuat halaman depan
Route::get('/home', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
