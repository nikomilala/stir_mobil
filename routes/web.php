<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
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
    return view('home');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/paket', 'PaketController@index');

Route::get('/trainer', function () {
    return view('trainer');
});

Route::get('/kendaraan', function () {
    return view('kendaraan');
});
// Route::resource('kendaraan','MobillController');

Route::get('/kontak', function () {
    return view('include.contact');
});
