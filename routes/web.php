<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/', 'AuthController@login')->name('login');
    Route::post('/login', 'AuthController@login_action')->name('login_action');
    Route::get('/regis', 'AuthController@regis')->name('regis');
    Route::post('/regisStore', 'AuthController@regisStore')->name('regisStore');
    // /regisStore
    Route::get('/logout', function () {
        Session::flush();
        return redirect()->route('login');
    })->name('logout');
});
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'ValidasiUser'], function () {

    Route::redirect('/', 'dashboard/admin');

    // Dashboard
    Route::prefix('dashboard')->group(function () {

        Route::get('/general', 'DashboardController@index')->name('dashboard');
        Route::get('/admin', 'UserController@index')->name('admin');
        
        Route::prefix('laporan')->group(function () {
            Route::get('/owner', 'laporanController@owner')->name('laporan.owner');
            Route::get('/admin', 'laporanController@admin')->name('laporan.admin');
            Route::get('/penjual', 'laporanController@penjual')->name('laporan.penjual');
            Route::get('/member', 'laporanController@member')->name('laporan.member');
        });

        Route::prefix('user')->group(function () {
            Route::get('/', 'UserController@index')->name('user.index');
            Route::get('/create', 'UserController@create')->name('user.create');
            Route::post('/store', 'UserController@store')->name('user.store');
            Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
            Route::put('/update', 'UserController@update')->name('user.update');
            Route::post('/hapus/{id}', 'UserController@hapus')->name('user.hapus');
            Route::get('/tambah', 'UserController@viewBaru')->name('user.tambah');
            // /
        });
        Route::prefix('guru')->group(function () {
            Route::get('/', 'guruController@index')->name('guru.index');
            Route::get('/create', 'guruController@create')->name('guru.create');
            Route::post('/store', 'guruController@store')->name('guru.store');
            Route::get('/edit/{id}', 'guruController@edit')->name('guru.edit');
            Route::put('/update', 'guruController@update')->name('guru.update');
            Route::post('/hapus/{id}', 'guruController@hapus')->name('guru.hapus');
            Route::get('/tambah', 'guruController@viewBaru')->name('guru.tambah');
            // /
        });

        Route::prefix('disabilitas')->group(function () {
            Route::get('/', 'disabilitasController@index')->name('disabilitas.index');
            Route::get('/create', 'disabilitasController@create')->name('disabilitas.create');
            Route::post('/store', 'disabilitasController@store')->name('disabilitas.store');
            Route::get('/edit/{id}', 'disabilitasController@edit')->name('disabilitas.edit');
            Route::put('/update', 'disabilitasController@update')->name('disabilitas.update');
            Route::post('/hapus/{id}', 'disabilitasController@hapus')->name('disabilitas.hapus');
            Route::get('/tambah', 'disabilitasController@viewBaru')->name('disabilitas.tambah');
            // /
        });

        Route::prefix('obser')->group(function () {
            Route::get('/', 'obserController@index')->name('obser.index');
            Route::get('/create', 'obserController@create')->name('obser.create');
            Route::post('/store', 'obserController@store')->name('obser.store');
            Route::get('/edit/{id}', 'obserController@edit')->name('obser.edit');
            Route::put('/update', 'obserController@update')->name('obser.update');
            Route::post('/hapus/{id}', 'obserController@hapus')->name('obser.hapus');
            Route::get('/tambah', 'obserController@viewBaru')->name('obser.tambah');
            // /
        });

        Route::prefix('kodepos')->group(function () {
            Route::get('/', 'kodeposController@index')->name('kodepos.index');
        });
        Route::prefix('uji')->group(function () {
            Route::get('/', 'sawMethodController@index')->name('uji.index');
            Route::get('/create', 'sawMethodController@create')->name('uji.create');
            // /
        });
        // Blank
        Route::get('blank', function () {
            return view('pages.blank.layout-blank', ['menu' => 'blank']);
        })->name('blank');
    });
});
