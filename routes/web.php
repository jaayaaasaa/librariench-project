<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Livewire\Buku;
use App\Livewire\Petugas;
use App\Livewire\SignIn;
use App\Livewire\SignUp;

Route::get('/sign-up', SignUp::class);
Route::get('/sign-in', SignIn::class);
Route::get('/buku-test', Buku::class);



Route::get('/app', [LandingController::class, 'loginApp'])->name('app');
Route::get('/page2', [LandingController::class, 'page2']);
Route::get('/kategori', [LandingController::class, 'kategori']);
Route::get('/fantasy', [LandingController::class, 'fantasy']);
Route::get('/love', [LandingController::class, 'love']);
Route::get('/knowledge', [LandingController::class, 'knowledge']);
Route::get('/drama', [LandingController::class, 'drama']);

Route::get('/book-1', [HomeController::class, 'book1']);
Route::get('/book-id', function () {
    return view('deskripsi.id1');
});


Route::get('/homepage', function () {
    return view('guest');
});
Route::get('/table-pinjam', function () {
    return view('source.table-minjam');
});

