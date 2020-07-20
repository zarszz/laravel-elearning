<?php

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

Route::get('/', 'front\WelcomeController@index')->name('welcome');
Route::get('/kelas', 'front\KelasController@index')->name('kelas');
Route::get('/kelas/detail/{id}', 'front\KelasController@detail')->name('kelas.detail');
Route::get('/kelas/belajar/{id}/{idvideo}', 'front\KelasController@belajar')->name('kelas.belajar');
Route::get('/podcast', 'front\PodcastController@index')->name('podcast');
Route::get('/podcast/detail/{id}', 'front\PodcastController@detail')->name('podcast.detail');
Route::get('/blog', 'front\BlogController@index')->name('blog');
Route::get('/blog/detail/{id}', 'front\BlogController@detail')->name('blog.detail');

Route::group(['middleware' => ['auth', 'checkRole:regular,premium']], function () {
    Route::get('/upgradepremium', 'front\TransaksiController@index')->name('upgradepremium');
    Route::post('/uploadbukti', 'front\TransaksiController@uploadbukti')->name('uploadbukti');
    Route::post('/uploadulang', 'front\TransaksiController@uploadulang')->name('uploadulang');

    Route::get('/akun', 'front\AkunController@index')->name('akun');
    Route::get('/akun/editprofil', 'front\AkunController@editprofil')->name('akun.editprofil');
    Route::post('/akun/simpaneditprofil', 'front\AkunController@simpaneditprofil')->name('akun.simpaneditprofil');
    Route::get('/akun/editkatasandi', 'front\AkunController@editkatasandi')->name('akun.editkatasandi');
    Route::post('/akun/simpaneditkatasandi', 'front\AkunController@simpaneditkatasandi')->name('akun.simpaneditkatasandi');

});

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    Route::get('/admin', 'admin\DashboardController@index')->name('admin');

    //Kelas
    Route::get('/admin/kelas', 'admin\KelasController@index')->name('admin.kelas');
    Route::get('/admin/kelas/tambah', 'admin\KelasController@tambah')->name('admin.kelas.tambah');
    Route::post('/admin/kelas/simpan', 'admin\KelasController@simpan')->name('admin.kelas.simpan');
    Route::get('/admin/kelas/detail/{id}', 'admin\KelasController@detail')->name('admin.kelas.detail');
    Route::get('/admin/kelas/hapus/{id}', 'admin\KelasController@hapus')->name('admin.kelas.hapus');
    Route::get('/admin/kelas/edit/{id}', 'admin\KelasController@edit')->name('admin.kelas.edit');
    Route::post('/admin/kelas/update/{id}', 'admin\KelasController@update')->name('admin.kelas.update');
    Route::get('/admin/kelas/tambahvideo/{id}', 'admin\KelasController@tambahvideo')->name('admin.kelas.tambahvideo');
    Route::post('/admin/kelas/simpanvideo/{id}', 'admin\KelasController@simpanvideo')->name('admin.kelas.simpanvideo');
    Route::get('/admin/kelas/hapusvideo/{id}/{idkelas}', 'admin\KelasController@hapusvideo')->name('admin.kelas.hapusvideo');

    //User
    Route::get('/admin/user', 'admin\UserController@index')->name('admin.user');

    Route::get('/admin/podcast', 'admin\PodcastController@index')->name('admin.podcast');
    Route::get('/admin/podcast/tambah', 'admin\PodcastController@tambah')->name('admin.podcast.tambah');
    Route::post('/admin/podcast/simpan', 'admin\PodcastController@simpan')->name('admin.podcast.simpan');
    Route::get('/admin/podcast/detail/{id}', 'admin\PodcastController@detail')->name('admin.podcast.detail');
    Route::get('/admin/podcast/hapus/{id}', 'admin\PodcastController@hapus')->name('admin.podcast.hapus');
    Route::get('/admin/podcast/edit/{id}', 'admin\PodcastController@edit')->name('admin.podcast.edit');
    Route::post('/admin/podcast/update/{id}', 'admin\PodcastController@update')->name('admin.podcast.update');

    //Blog
    Route::get('/admin/blog', 'admin\BlogController@index')->name('admin.blog');
    Route::get('/admin/blog/tambah', 'admin\BlogController@tambah')->name('admin.blog.tambah');
    Route::post('/admin/blog/simpan', 'admin\BlogController@simpan')->name('admin.blog.simpan');

    //Transaksi
    Route::get('/admin/transaksi', 'admin\TransaksiController@index')->name('admin.transaksi');
    Route::get('/admin/transaksi/belumdicek', 'admin\TransaksiController@belumdicek')->name('admin.transaksi.belumdicek');
    Route::get('/admin/transaksi/ditolak', 'admin\TransaksiController@ditolak')->name('admin.transaksi.ditolak');
    Route::get('/admin/transaksi/disetujui', 'admin\TransaksiController@disetujui')->name('admin.transaksi.disetujui');
    Route::get('/admin/transaksi/detail/{id}', 'admin\TransaksiController@detail')->name('admin.transaksi.detail');
    Route::post('/admin/transaksi/ubah/{id}', 'admin\TransaksiController@ubah')->name('admin.transaksi.ubah');
});

Auth::routes();
