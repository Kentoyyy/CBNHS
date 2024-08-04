<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mission', function () {
    return view('pages.about-mission');
});

Route::get('/teacher', function () {
    return view('pages.dashboard-teacher');
});

Route::get('/admission', function () {
    return view('pages.admission');
});