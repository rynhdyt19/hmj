<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Models\Activity;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/kegiatan-admin', [KegiatanController::class, 'index']);
Route::post('activity', [KegiatanController::class, 'store']);
// Route::get('/activity/{id}', [KegiatanController::class, 'edit']);
Route::put('/activity/{id}', [KegiatanController::class, 'update']);
Route::get('/activity/{id}', [KegiatanController::class, 'show']);


Route::get('/index', function () {
    return view('index');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/info-beasiswa', function () {
    return view('info-beasiswa');
});

Route::get('/info-pendaftaran', function () {
    return view('info-pendaftaran');
});

Route::get('/info-pengumuman', function () {
    return view('info-pengumuman');
});

Route::get('/admin', function () {
    return view('admin.admin');
});
