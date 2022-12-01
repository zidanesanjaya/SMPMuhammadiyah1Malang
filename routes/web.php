<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;

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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/cermus', function () {
    return view('cermus');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/aksi', function () {
    return view('aksi');
});

// Login And Register Page
Route::get('dashboard_admin', [AuthController::class, 'dashboard_admin']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('login_admin', [AuthController::class, 'login_admin'])->name('login_admin');
Route::get('register', [AuthController::class, 'registration'])->name('register');

//Authetication Create and Read
Route::post('login_ppdb', [AuthController::class, 'login'])->name('login.login_ppdb'); 
Route::post('login_admin_auth', [AuthController::class, 'login_admin_auth'])->name('login.login_admin_auth'); 
Route::post('registration_ppdb', [AuthController::class, 'Registration_Ppdb'])->name('register.register_ppdb'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

//Dashboard Siswa
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('pembayaran', [SiswaController::class, 'pembayaran_page'])->name('pembayaran'); 
Route::get('form_wajib', [SiswaController::class, 'form_wajib_page'])->name('form_wajib'); 
Route::get('profile', [SiswaController::class, 'profile_page'])->name('profile'); 

