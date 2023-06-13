<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekulaSekolahController;
use App\Http\Controllers\DaftarSekolahController;
use App\Http\Controllers\CekulaOrtuController;
use App\Http\Controllers\DaftarOrtuController;
use App\Http\Controllers\BerandaOrtuController;
use App\Http\Controllers\BandingkanController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\ViewProfilSekolahController;
use App\Http\Controllers\errorController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\BerandaSekolahController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\LihatResponsController;
use App\Http\Controllers\MulaiPendaftaranController;
use App\Http\Controllers\ExportController;
use App\Http\Middleware\Authenticate;
use GuzzleHttp\Middleware;

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
//Route Cekula
Route::get('/cekula/mulai', [CekulaSekolahController::class, 'mulai']);
//Route Masuk Sekolah
Route::get('/cekula/masuksebagai', [CekulaSekolahController::class, 'showpilihanpengguna']);
Route::get('/cekula/masuksekolah', [CekulaSekolahController::class, 'index'])->middleware('guest:sekolah')->name('sekolah');
Route::post('/cekula/loginsekolah', [CekulaSekolahController::class, 'login']);
//Route beranda Sekolah
Route::get('/cekula/BerandaSekolah', [BerandaSekolahController::class, 'showBerandaSekolah'])->middleware('auth:sekolah')->name('beranda');
//Route Daftar Sekolah
Route::get('/cekula/Daftarsekolah', [DaftarSekolahController::class, 'showDaftarSekolah']);
Route::post('/cekula/Berhasilsekolah', [DaftarSekolahController::class, 'store']);
//Route Masuk Orang Tua
Route::get('/cekula/masukorangtua', [CekulaOrtuController::class, 'index'])->middleware('guest:orangtua')->name('orangtua');
Route::post('/cekula/loginorangtua', [CekulaOrtuController::class, 'login']);
//Route Daftar Orang Tua
Route::get('/cekula/Daftarorangtua', [DaftarOrtuController::class, 'showDaftarOrangtua']);
Route::post('/cekula/Berhasilorangtua', [DaftarOrtuController::class, 'store']);
//Route Melihat Beranda Orang Tua
Route::get('/cekula/BerandaOrtu', [BerandaOrtuController::class, 'showBerandaOrtu'])->middleware('auth:orangtua')->name('ortu');
//Route Bandingkan
Route::get('/cekula/Bandingkansekolah', [BandingkanController::class, 'showlamanbandingkan'])->middleware('auth:orangtua')->name('ortu');
Route::post('/cekula/Informasisekolah', [BandingkanController::class, 'showInformasiSekolah'])->middleware('auth:orangtua')->name('ortu');
//Route Cari
Route::get('/cekula/cari', [PencarianController::class, 'showHasilPencarian'])->middleware('auth:orangtua')->name('ortu');
//Route melihat Profil Sekolah (ortu)
Route::get('/cekula/profilsekolah/{nomor}', [ViewProfilSekolahController::class, 'viewProfilSekolah'])->middleware('auth:orangtua')->name('ortu');
//Route Daftar Sekolah (ortu)
Route::get('/cekula/formulir/{no}', [DaftarController::class, 'showFormulir'])->middleware('auth:orangtua')->name('ortu');
Route::post('/cekula/jawabanformulir/{no2}', [DaftarController::class, 'simpanFormulir'])->middleware('auth:orangtua')->name('ortu');
//Route profil ortu
Route::get('/cekula/profilpenggunaortu', [ProfileController::class, 'showProfileOrtu'])->middleware('auth:orangtua')->name('ortu');
Route::get('/cekula/editprofilortu/{noedit}', [ProfileController::class, 'showeditOrtu'])->middleware('auth:orangtua')->name('ortu');
Route::post('/cekula/simpanprofilortu/{nosimpan}', [ProfileController::class, 'showupdateOrtu'])->middleware('auth:orangtua')->name('ortu');

//Route profil sekolah
Route::get('/cekula/profilpenggunasekolah', [Profile2Controller::class, 'showProfileSekolah'])->middleware('auth:sekolah')->name('beranda');
Route::get('/cekula/editprofilsekolah/{noedit2}', [Profile2Controller::class, 'showEditSekolah'])->middleware('auth:sekolah')->name('beranda');
Route::post('/cekula/simpanprofilsekolah/{nosimpan2}', [Profile2Controller::class, 'showUpdateSekolah'])->middleware('auth:sekolah')->name('beranda');

//route Logout Sekolah
Route::post('/cekula/logoutsekolah', [Profile2Controller::class, 'logoutSekolah']);

//Route Logout Ortu
Route::post('/cekula/logoutortu', [ProfileController::class, 'logoutOrtu']);

//Route Bantuanortu
Route::get('/cekula/bantuan', [BantuanController::class, 'showBantuan'])->middleware('auth:orangtua')->name('ortu');
//Route Bantuan Sekolah
Route::get('/cekula/bantuansekolah', [BantuanController::class, 'showBantuansekolah'])->middleware('auth:sekolah')->name('beranda');

//Route Lihat Respons
Route::get('/cekula/LihatRespons', [LihatResponsController::class, 'showLihatRespons'])->middleware('auth:sekolah')->name('beranda');
Route::get('/cekula/LihatFormulir/{form2}', [LihatResponsController::class, 'showLihatFormulir'])->middleware('auth:sekolah')->name('beranda');

//Route Simpan respons dn hapus
Route::post('/cekula/simpanrespons/{form3}', [LihatResponsController::class, 'simpanHasilPengumuman'])->middleware('auth:sekolah')->name('beranda');
Route::get('/cekula/hapusrespons/{form4}', [LihatResponsController::class, 'HapusRespons'])->middleware('auth:sekolah')->name('beranda');

//Route Umumkan
Route::post('/cekula/umumkan', [LihatResponsController::class, 'umumkan'])->middleware('auth:sekolah')->name('beranda');
Route::get('/cekula/tutupumumkan', [LihatResponsController::class, 'tutupumumkan'])->middleware('auth:sekolah')->name('beranda');

//Route Edit Tab profil sekolah
Route::get('/cekula/editinformasisekolah/{idsekul}', [BerandaSekolahController::class, 'editinformasisekolah'])->middleware('auth:sekolah')->name('beranda');
Route::post('/cekula/simpaninformasisekolah/{idsekul2}', [BerandaSekolahController::class, 'simpaninformasisekolah'])->middleware('auth:sekolah')->name('beranda');

//Route edit tab persyratan sekolah
Route::get('/cekula/editinformasisekolah2/{idsekula}', [BerandaSekolahController::class, 'editinformasisekolah2'])->middleware('auth:sekolah')->name('beranda');
Route::post('/cekula/simpaninformasisekolah2/{idsekula2}', [BerandaSekolahController::class, 'simpaninformasisekolah2'])->middleware('auth:sekolah')->name('beranda');

//Route Sesi
Route::get('/cekula/sesimulaidaftar', [MulaiPendaftaranController::class, 'showOpenSesi'])->middleware('auth:sekolah')->name('beranda');
Route::post('/cekula/berhasilbukasesi', [MulaiPendaftaranController::class, 'simpansesi'])->middleware('auth:sekolah')->name('beranda');
Route::get('/cekula/hapusmulaidaftar', [MulaiPendaftaranController::class, 'showhapusSesi'])->middleware('auth:sekolah')->name('beranda');

Route::get('/cekula/export-data', [ExportController::class, 'index'])->middleware('auth:sekolah')->name('beranda');
//Route Error
Route::get('/cekula/{nama}', [errorController::class, 'index']);
