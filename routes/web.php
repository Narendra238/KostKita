<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileUsersKostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KamarController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bookingcewe1', function () {
    return view('bookingcewe1');
});

Route::get('/bookingcewe2', function () {
    return view('bookingcewe2');
});

Route::get('/bookingcewe3', function () {
    return view('bookingcewe3');
});

Route::get('/bookingcowo1', function () {
    return view('bookingcowo1');
});

Route::get('/bookingcowo2', function () {
    return view('bookingcowo2');
});

Route::get('/bookingcowo3', function () {
    return view('bookingcowo3');
});

Route::get('/detailcowo3', function () {
    return view('detailcowo3');
});

Route::get('/detailcowo1', function () {
    return view('detailcowo1');
});

Route::get('/detailcowo2', function () {
    return view('detailcowo2');
});

Route::get('/detailcewe1', function () {
    return view('detailcewe1');
});

Route::get('/detailcewe2', function () {
    return view('detailcewe2');
});

Route::get('/detailcewe3', function () {
    return view('detailcewe3');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/roomcewe', function () {
    return view('roomcewe');
});

Route::get('/roomcowo', function () {
    return view('roomcowo');
});

Route::get('/tambahpenghuni', function () {
    return view('tambahpenghuni');
});

Route::get('/dataPenghuni', [ProfileUsersKostController::class, 'index']);

// Route::get('/dataPembayaran', function () {
//     return view('dataPembayaran');
// });

Route::get('/dataPembayaran', [KamarController::class, 'dataPembayaran']);
Route::post('/update-status-bayar', [ProfileUsersKostController::class, 'updateStatusBayar'])->name('updateStatusBayar');

Route::get('/editPenghuni', function () {
    return view('editPenghuni');
});


Route::get('/tambahpenghuni', [ProfileUsersKostController::class, 'create']);
Route::post('/tambahpenghuni', [ProfileUsersKostController::class, 'store']);
Route::get('/datakamaranak', [KamarController::class, 'dataKamarAnak']);

Route::get('/dashboardadmin', [KamarController::class, 'dashboardAdminSummary']);

Route::get('/editPenghuni/{id}', [ProfileUsersKostController::class, 'edit']);
Route::post('/updatePenghuni/{id}', [ProfileUsersKostController::class, 'update']);
Route::delete('/hapusPenghuni/{id}', [ProfileUsersKostController::class, 'destroy']);


Route::get('/profilanak', [ProfileUsersKostController::class, 'index']);
Route::get('/profilanak/{id}', [ProfileUsersKostController::class, 'show']);

Route::post('/login-gabungan', [LoginController::class, 'loginGabungan']);
