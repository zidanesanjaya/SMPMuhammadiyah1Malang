<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login_ppdb', [AuthController::class, 'login'])->name('login.login_ppdb'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('registration_ppdb', [AuthController::class, 'Registration_Ppdb'])->name('register.register_ppdb'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

