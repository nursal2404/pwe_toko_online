<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\PrivacyPoliceController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\DiskonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function () {
    echo('Muhadzib Nursaid');
});

Route::get('/npm', function () {
    echo('G1A020035');
});

Route::get('/kelas', function () {
    echo('A');
});
Route::get('/TTL', function () {
    echo('Pariaman, 24 April 2002');
});

Route::get('/asal', function () {
    echo('Sumatera Barat');
});
Route::get('/panggilan', function () {
    echo('Azib atau Nursal');
});

Route::get('/prodi', function () {
    echo('Informatika');
});

Route::get('/matkul', function () {
    echo('Praktikum PWE');
});

Route::get('/materi', function () {
    echo('Router, Controller, dan Laravel');
});

Route::get('profil', [ProfilController::class, 'index']);
Route::get('beranda', [HomeController::class, 'halaman']);
Route::get('about-us', [AboutUsController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('portofolio', [PortofolioController::class, 'index']);
Route::get('disclaimer', [DisclaimerController::class, 'index']);
Route::get('privacy-police', [PrivacyPoliceController::class, 'index']);
Route::get('pembelian', [BuyController::class, 'index']);
Route::get('penjualan', [SellController::class, 'index']);
Route::get('diskon', [DiskonController::class, 'index']);