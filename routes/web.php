<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dataPenghuni', function () {
    return view('dataPenghuni');
});

Route::get('/dataPembayaran', function () {
    return view('dataPembayaran');
});

Route::get('/editPenghuni', function () {
    return view('editPenghuni');
});

Route::get('/profileanak', function () {
    return view('profileanak');
});

Route::get('/datakamaranak', function () {
    return view('datakamaranak');
});

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
});
