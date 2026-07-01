<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\FeedbackController;
use App\Models\Mobil;
use App\Models\Warna;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/formpelanggan', function () {

    $warna = Warna::all();

    return view(
        'formpelanggan',
        compact('warna')
    );

})->name('formpelanggan');

Route::get('/detailrekomendasi', function () {
    return view('detailrekomendasi');
});

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/daftarmobil', function () {

    $mobils = Mobil::all();

    return view('daftarmobil', compact('mobils'));

});

Route::get('/tambahmobil', function () {
    return view('formmobil');
});

Route::post('/mobil/store', [MobilController::class, 'store'])
    ->name('mobil.store');

Route::post('/mobil/import', [MobilController::class, 'import'])
    ->name('mobil.import');

Route::get('/mobil/{id}/edit', [MobilController::class, 'edit'])
    ->name('mobil.edit');

Route::put('/mobil/{id}', [MobilController::class, 'update'])
    ->name('mobil.update');

Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])
    ->name('mobil.destroy');

Route::post(
    '/rekomendasi',
    [RekomendasiController::class, 'hitung']
)->name('rekomendasi.hitung');

Route::post(
    '/feedback',
    [FeedbackController::class, 'simpan']
)->name('feedback.simpan');

Route::get('/uat', function () {
    return view('uat');
})->name('uat.index');

Route::get('/penilaian', function () {
    $feedbacks = \App\Models\Feedback::all();

    return view('feedback', compact('feedbacks'));
})->name('feedback.index');

Route::get('/admin/feedback', [FeedbackController::class, 'index'])
    ->name('admin.feedback');

Route::get('/admin/feedback/{id}', [FeedbackController::class, 'detail'])
    ->name('admin.feedback.detail');