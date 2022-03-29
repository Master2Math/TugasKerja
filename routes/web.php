<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
//   Route::get('/ppdb', [App\Http\Controllers\HomeController::class, 'ppdb'])->name('ppdb');
});

Auth::routes();

//user
//Route::middleware('auth')->group(function () {
	//crud internal
//	Route::get('/crudagama', [App\Http\Controllers\HomeController::class, 'crudagama'])->name('crudagama');
//	Route::get('/crudkecamatan', [App\Http\Controllers\HomeController::class, 'crudkecamatan'])->name('crudkecamatan');
//	Route::get('/crudkelurahan', [App\Http\Controllers\HomeController::class, 'crudkelurahan'])->name('crudkelurahan');
//	Route::get('/crudkota', [App\Http\Controllers\HomeController::class, 'crudkota'])->name('crudkota');
//	Route::get('/crudprovinsi', [App\Http\Controllers\HomeController::class, 'crudprovinsi'])->name('crudprovinsi');
//});

//Route::middleware('auth', 'checkRole:admin, user')->group(function () {
	
//});

//Route::get('/tampildata', [App\Http\Controllers\HalamanController::class, 'tampildata'])->name('tampildata');

//Route::get('/informasi', [App\Http\Controllers\PengumumanController::class, 'index'])->name('pengumuman');
Route::middleware(['auth', 'checkRole:admin,user'])->group(function () {
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
});

Route::get('/profil', [App\Http\Controllers\HalamanController::class, 'profil'])->name('profil');
Route::get('/dashboard', [App\Http\Controllers\HalamanController::class, 'dashboard'])->name('dashboard');
Route::get('/manajemen', [App\Http\Controllers\HalamanController::class, 'manajemen'])->name('manajemen');
Route::get('/kesiswaan', [App\Http\Controllers\HalamanController::class, 'kesiswaan'])->name('kesiswaan');
Route::get('/akademik', [App\Http\Controllers\HalamanController::class, 'akademik'])->name('akademik');
Route::get('/informasi', [App\Http\Controllers\InformasiController::class, 'index'])->name('informasi');





//Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');

//Route::get('/tabel', [App\Http\Controllers\HomeController::class, 'tabel'])->name('tabel');





//ADMIN VIEW DATA
Route::middleware(['auth', 'checkRole:admin'])->group(function () {

Route::get('/tampildata', [App\Http\Controllers\InformasiController::class, 'indexTampil'])->name('tampildata');
Route::get('/tampildata/rincian/{id}', [App\Http\Controllers\InformasiController::class, 'rincian'])->name('tampildata.rincian');

Route::get('/tampildata/rincian/kirim/{id}', [App\Http\Controllers\InformasiController::class, 'kirim'])->name('tampildata.kirim');

Route::get('/tampildata/rincianTolak/{id}', [App\Http\Controllers\InformasiController::class, 'rincianTolak'])->name('tampildata.rincianTolak');

//Route::get('/tampildata/rincian/diterima/{id}', [App\Http\Controllers\InformasiController::class, 'diterima'])->name('tampildata.diterima');

//Route::get('/tampildata/rincian/ditolak/{id}', [App\Http\Controllers\InformasiController::class, 'ditolak'])->name('tampildata.ditolak');


Route::post('/tampildata/rincian/diterima', [App\Http\Controllers\InformasiController::class, 'diterima'])->name('tampildata.diterima');

Route::post('/tampildata/rincian/ditolak', [App\Http\Controllers\InformasiController::class, 'ditolak'])->name('tampildata.ditolak');


Route::post('/tampildata/store', [App\Http\Controllers\TampilController::class, 'store'])->name('tampildata.store');

Route::get('/tampildata/hapus/{id}', [App\Http\Controllers\TampilController::class, 'destroy'])->name('tampildata.destroy');

Route::post('/tampildata/update', [App\Http\Controllers\TampilController::class, 'update'])->name('tampildata.update');
});
//admin

//CRUD PPDB
// / = URL
// . = UNTUK PEMANGGILAN ROUTE NGARAH KE CONTROLLER

// get = ambil data
// post = kirim data

// store = simpan
// destroy = hapus



// CRUD PPDB USER

Route::middleware(['auth', 'checkRole:admin,user'])->group(function () {

//Route::get('/ppdb', [App\Http\Controllers\PpdbController::class, 'index'])->name('ppdb');

Route::post('/ppdb/simpan', [App\Http\Controllers\PpdbController::class, 'store'])->name('ppdb.store');

Route::get('/ppdb/hapus/{id}', [App\Http\Controllers\PpdbController::class, 'destroy'])->name('ppdb.destroy');
	// namafolder.namafolder.namaBlade.function
	//									controller

Route::get('/ppdb/edit/{id}', [App\Http\Controllers\PpdbController::class, 'edit'])->name('ppdb.edit');

Route::post('/ppdb/update', [App\Http\Controllers\PpdbController::class, 'update'])->name('ppdb.update');
});


// CRUD AGAMA

Route::middleware(['auth', 'checkRole:admin'])->group(function () {

Route::get('/crudagama', [App\Http\Controllers\AgamaController::class, 'index'])->name('crudagama');
Route::post('/crudagama/store', [App\Http\Controllers\AgamaController::class, 'store'])->name('crudagama.store');
Route::get('/crudagama/hapus/{id}', [App\Http\Controllers\AgamaController::class, 'destroy'])->name('crudagama.destroy');
Route::get('/crudagama/edit/{id}', [App\Http\Controllers\AgamaController::class, 'edit'])->name('crudagama.edit');
Route::post('/crudagama/update', [App\Http\Controllers\AgamaController::class, 'update'])->name('crudagama.update');

});

// CRUD KOTA

Route::middleware(['auth', 'checkRole:admin'])->group(function () {

Route::get('/crudkota', [App\Http\Controllers\KotaController::class, 'index'])->name('crudkota');
Route::post('/crudkota/store', [App\Http\Controllers\KotaController::class, 'store'])->name('crudkota.store');
Route::get('/crudkota/hapus/{id}', [App\Http\Controllers\KotaController::class, 'destroy'])->name('crudkota.destroy');
Route::get('/crudkota/edit/{id}', [App\Http\Controllers\KotaController::class, 'edit'])->name('crudkota.edit');
Route::post('/crudkota/update', [App\Http\Controllers\KotaController::class, 'update'])->name('crudkota.update');
});

// CRUD KECAMATAN

Route::middleware(['auth', 'checkRole:admin'])->group(function () {

Route::get('/crudkecamatan', [App\Http\Controllers\KecamatanController::class, 'index'])->name('crudkecamatan');
Route::post('/crudkecamatan/store', [App\Http\Controllers\KecamatanController::class, 'store'])->name('crudkecamatan.store');
Route::get('/crudkecamatan/hapus/{id}', [App\Http\Controllers\KecamatanController::class, 'destroy'])->name('crudkecamatan.destroy');
Route::get('/crudkecamatan/edit/{id}', [App\Http\Controllers\KecamatanController::class, 'edit'])->name('crudkecamatan.edit');
Route::post('/crudkecamatan/update', [App\Http\Controllers\KecamatanController::class, 'update'])->name('crudkecamatan.update');
});

// CRUD KELURAHAN

Route::middleware(['auth', 'checkRole:admin'])->group(function () {

Route::get('/crudkelurahan', [App\Http\Controllers\KelurahanController::class, 'index'])->name('crudkelurahan');
Route::post('/crudkelurahan/store', [App\Http\Controllers\KelurahanController::class, 'store'])->name('crudkelurahan.store');
Route::get('/crudkelurahan/hapus/{id}', [App\Http\Controllers\KelurahanController::class, 'destroy'])->name('crudkelurahan.destroy');
Route::get('/crudkelurahan/edit/{id}', [App\Http\Controllers\KelurahanController::class, 'edit'])->name('crudkelurahan.edit');
Route::post('/crudkelurahan/update', [App\Http\Controllers\KelurahanController::class, 'update'])->name('crudkelurahan.update');
});



// CRUD PPDB USER

Route::middleware(['auth', 'checkRole:admin,user'])->group(function () {

Route::get('/ppdb', [App\Http\Controllers\InformasiController::class, 'indexPPDB'])->name('ppdb');

Route::get('/ppdbvalidasi/validasi/{id}', [App\Http\Controllers\InformasiController::class, 'indexValidasiPPDB'])->name('validasi.indexValidasiPPDB');

Route::get('/ppdbvalidasi/kirim/{id}', [App\Http\Controllers\InformasiController::class, 'kirim'])->name('validasi.kirim');


Route::get('/ppdbvalidasi/edit/{id}', [App\Http\Controllers\InformasiController::class, 'edit'])->name('validasi.edit');

Route::post('/ppdbvalidasi/update', [App\Http\Controllers\InformasiController::class, 'update'])->name('validasi.update');



});


//Route::get('test/{paramter1}/{paramter2}', 'Somecontroller@somemethod');
//Route::get('/posts/show-post/{id}/{name}','PostController@show_post')->name('post.show');






//TIDAK PAKAI
Route::get('send-mail', function () {

    $details = [
        'title' => 'Email Dari Madrasah Ibtidaiyah Swasta',
        'body' => 'Form Yang Anda Isi Akan Diperiksa Dalam Beberapa Hari, Harap UNTUK
        Mengecek Email Anda Secara Berkala'
    ];
   
    \Mail::to('master2mathmaster@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    return redirect("/home")->with('message', 'item updated successfully');

});