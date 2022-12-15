<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\informasiController;
use App\Http\Controllers\UmumController;



use App\Http\Middleware\CheckRoleAdmin;
use App\Http\Middleware\CheckRoleUser;
use App\Http\Middleware\CheckRoleSiswa;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/cermus', function () {
    return view('cermus');
});

Route::get('/matapelajaran', function () {
    return view('matpel');
});

Route::get('/permatapelajaran', function () {
    return view('permatpel');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/aksimuhasa', function () {
    return view('aksi');
});

Route::get('wizard', function () {
    return view('default');
});

Route::get('/', [UmumController::class, 'index']);


// Login And Register Page
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('login_admin', [AuthController::class, 'login_admin'])->name('login_admin');
Route::get('register', [AuthController::class, 'registration'])->name('register');

//Authetication Create and Read
Route::post('login_ppdb', [AuthController::class, 'login'])->name('login.login_ppdb'); 
Route::post('login_admin_auth', [AuthController::class, 'login_admin_auth'])->name('login.login_admin_auth'); 
Route::post('registration_ppdb', [AuthController::class, 'Registration_Ppdb'])->name('register.register_ppdb'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard_admin', [AuthController::class, 'dashboard_admin'])->name('dashboard_admin'); 

    Route::middleware([CheckRoleAdmin::class])->group(function(){
        //json
        Route::get('json_vw_histori_pembayaran/{id}', [GelombangController::class, 'json_vw_histori_pembayaran'])->name('json_vw_histori_pembayaran');
        Route::get('json_detail_siswa_by_id/{id}', [AdminController::class, 'get_json_detail_siswa'])->name('detail_siswa_by_id');
        Route::get('json_gelombang', [AdminController::class, 'get_json_gelombang'])->name('json_gelombang');
        //Gelombang
        Route::get('gelombang', [GelombangController::class, 'index'])->name('gelombang'); 
        Route::get('list_pembayaran_lunas_page', [GelombangController::class, 'list_pembayaran_lunas_page'])->name('list_pembayaran_lunas_page');
        Route::get('list_pembayaran_belum_lunas_page', [GelombangController::class, 'list_pembayaran_belum_lunas_page'])->name('list_pembayaran_belum_lunas_page');  
        Route::get('list_pembayaran_page', [GelombangController::class, 'list_pembayaran_page'])->name('list_pembayaran_page');  
        Route::get('gelombang_edit/{id}', [GelombangController::class, 'gelombang_update_page'])->name('gelombang_update'); 
            Route::post('update_histori/{id}', [GelombangController::class, 'update_histori'])->name('update.histori_pembayaran'); 
            Route::post('store_gelombang', [GelombangController::class, 'store_gelombang'])->name('store.gelombang'); 
            Route::put('update_gelombang', [GelombangController::class, 'update_gelombang'])->name('update.gelombang'); 
            Route::delete('destroy_gelombang/{id}', [GelombangController::class, 'destroy_gelombang'])->name('gelombang.destroy');
    
        //Informasi
        Route::get('sambutan', [informasiController::class, 'sambutan'])->name('sambutan'); 
        Route::get('visimisi', [informasiController::class, 'visimisi_page'])->name('visimisi_page'); 
        Route::get('galeri', [informasiController::class, 'galeri'])->name('galeri'); 
        Route::get('cermus', [informasiController::class, 'cermus'])->name('cermus'); 
            Route::put('store_sambutan', [informasiController::class, 'insert_sambutan'])->name('store.sambutan'); 
            Route::post('store_visimisi', [informasiController::class, 'insert_visi_misi'])->name('store.visimisi'); 
            Route::post('store_galeri', [informasiController::class, 'insert_galeri'])->name('store.galeri'); 
            Route::post('store_cermus', [informasiController::class, 'insert_cermus'])->name('store.cermus'); 
            Route::delete('delete_galeri/{id}', [informasiController::class, 'destroy_galeri'])->name('destroy.galeri'); 
            Route::delete('delete_visi_misi/{id}', [informasiController::class, 'destroy_visimisi'])->name('destroy.visimisi'); 

        //Sosial Media
        Route::get('sosial_media', [SosialMediaController::class, 'sosial_media_page'])->name('sosial_media.page'); 

        //Siswa
        Route::get('user_siswa', [SiswaController::class, 'user_siswa_page'])->name('user_siswa.page'); 
            Route::put('update_gelombang_siswa/{id}', [AdminController::class, 'update_gelombang_user'])->name('update.gelombang_siswa');
            Route::put('reset_password/{id}', [AdminController::class, 'reset_password'])->name('update.reset_password'); 
            Route::delete('destroy_user/{id}', [AdminController::class, 'destroy_user'])->name('user.destroy_siswa');
 

        //Admin
        Route::get('user_admin', [AdminController::class, 'user_admin_page'])->name('user_admin.page'); 
        Route::get('admin_edit/{id}', [AdminController::class, 'admin_update_page'])->name('admin.edit'); 
            Route::post('store_admin', [AdminController::class, 'store_admin'])->name('admin.add_user'); 
            Route::put('update_admin', [AdminController::class, 'update_admin'])->name('update.admin'); 

        //Pelajaran
        Route::get('list_kelas', [KelasController::class, 'kelas_page'])->name('kelas.page'); 
            Route::delete('destroy_kelas/{id}', [KelasController::class, 'destroy_kelas'])->name('kelas.destroy');
            Route::post('store_kelas', [KelasController::class, 'store_kelas'])->name('store.kelas'); 
    });


    Route::middleware([CheckRoleUser::class])->group(function(){
        //Informasi
        Route::get('sambutan', [informasiController::class, 'sambutan'])->name('sambutan'); 
        Route::get('visimisi', [informasiController::class, 'visimisi_page'])->name('visimisi_page'); 
        Route::get('galeri', [informasiController::class, 'galeri'])->name('galeri'); 
        Route::get('cermus', [informasiController::class, 'cermus'])->name('cermus'); 
            Route::put('store_sambutan', [informasiController::class, 'insert_sambutan'])->name('store.sambutan'); 
            Route::post('store_visimisi', [informasiController::class, 'insert_visi_misi'])->name('store.visimisi'); 
            Route::post('store_galeri', [informasiController::class, 'insert_galeri'])->name('store.galeri'); 
            Route::post('store_cermus', [informasiController::class, 'insert_cermus'])->name('store.cermus'); 
            Route::delete('delete_galeri/{id}', [informasiController::class, 'destroy_galeri'])->name('destroy.galeri'); 
            Route::delete('delete_visi_misi/{id}', [informasiController::class, 'destroy_visimisi'])->name('destroy.visimisi'); 
    });

    Route::middleware([CheckRoleSiswa::class])->group(function(){
        //json data
        Route::get('json_detail_siswa', [SiswaController::class, 'detail_siswa'])->name('detail_siswa_auth');
        //Dashboard Siswa
        Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
        Route::get('pembayaran', [SiswaController::class, 'pembayaran_page'])->name('pembayaran'); 
            Route::post('insert_pembayaran', [SiswaController::class, 'insert_pembayaran'])->name('insert.pembayaran'); 
        Route::get('form_wajib', [SiswaController::class, 'form_wajib_page'])->name('form_wajib');
        Route::get('form_wajib_orang_tua', [SiswaController::class, 'form_wajib_orang_tua_page'])->name('form_wajib_orang_tua');
            Route::post('insert_detail_siswa', [SiswaController::class, 'insert_detail'])->name('insert.detail_siswa'); 
            Route::post('insert_detail_orang_tua', [SiswaController::class, 'insert_orang_tua'])->name('insert.detail_orang_tua');   
        Route::get('profile', [SiswaController::class, 'profile_page'])->name('profile');     
            Route::put('update_siswa', [SiswaController::class, 'update_profile'])->name('update.profile'); 
            Route::put('update_password_siswa/{id}', [SiswaController::class, 'update_password_siswa'])->name('update.password_siswa'); 
    });
});






