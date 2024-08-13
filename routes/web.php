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

Route::get('/events', function () {
    return view('pages.events');
});
Route::get('/admission', function () {
    return view('pages.admission');
});
Route::get('/intendent', function () {
    return view('pages.about-intendent');
});
Route::get('/administrator', function () {
    return view('pages.administrator');
});
Route::get('/staff', function () {
    return view('pages.staff');
});

Route::get('/supportservices', function () {
    return view('pages.supportservices');
});
Route::get('/faculty', function () {
    return view('pages.faculty');
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
Route::get('/dashboardlayout', function () {
    return view('layouts.portal-layout');
});
Route::get('/dashboard', function () {
    return view('pages.studentportal.dashboard');
});

Route::get('/grades', function () {
    return view('pages.studentportal.grades');
});
Route::get('/announcement', function () {
    return view('pages.studentportal.announcement');
});
Route::get('/examination', function () {
    return view('pages.studentportal.examination');
});
Route::get('/announcement', function () {
    return view('pages.studentportal.announcement');
});
Route::get('/profile', function () {
    return view('pages.studentportal.profile');
});
Route::get('/schedule', function () {
    return view('pages.studentportal.class-schedule');
});

Route::get('/teacherportal', function () {
    return view('pages.teacherportal.teacher-portal-landing');
});
Route::get('/teacherdashboard', function () {
    return view('layouts.teacherportal-layout');
});

Route::get('/teacherdashboard', function () {
    return view('pages.teacherportal.teacherdashboard');
});
Route::get('/managestudent', function () {
    return view('pages.teacherportal.teacher-students');
});
Route::get('/teachergradestudent', function () {
    return view('pages.teacherportal.teacher-grades');
});
Route::get('/teacherprofile', function () {
    return view('pages.teacherportal.teacher-profile');
});
Route::get('/teacherschedule', function () {
    return view('pages.teacherportal.teacher-schedule');
});

Route::get('/adminlayout', function () {
    return view('layouts.admin-layout');
});

Route::get('/adminlanding', function () {
    return view('pages.admin.landing');
});
Route::get('/admindashboard', function () {
    return view('pages.admin.dashboard');
});


Route::get('/adminusermanagement', function () {
    return view('pages.admin.usermanagement');

});
Route::get('/adminsubjectmanagement', function () {
    return view('pages.admin.subjectmanagement');

});












