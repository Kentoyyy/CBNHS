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
Route::get('/intendent', function () {
    return view('pages.about-intendent');
});
Route::get('/personnel.admin', function () {
    return view('pages.personnel-admin');
});
Route::get('/test', function () {
    return view('nav.intendent');
});
Route::get('/resources', function () {
    return view('pages.resources');
});
Route::get('/student', function () {
    return view('pages.studentportal.student-portal');
});
Route::get('/faqportal', function () {
    return view('pages.studentportal.faqportal');
});
// routes/web.php
Route::get('/dashboard', function () {
    return view('layouts.portal-layout');
});
Route::get('/dashboard', function () {
    return view('pages.studentportal.dashboard');
});
Route::get('/course', function () {
    return view('pages.studentportal.course');
});
Route::get('/grades', function () {
    return view('pages.studentportal.grades');
});
Route::get('/attendance', function () {
    return view('pages.studentportal.attendance');
});

