<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountManagementController;
use App\Http\Controllers\IssuancesController;
// Welcome and Static Pages
Route::view('/', 'welcome');
Route::view('/mission', 'pages.about-mission');
Route::view('/teacher', 'pages.dashboard-teacher');
Route::view('/events', 'pages.events');
Route::view('/admission', 'pages.admission');
Route::view('/intendent', 'pages.about-intendent');
Route::view('/administrator', 'pages.administrator');
Route::view('/staff', 'pages.staff');
Route::view('/deped-memo', 'pages.deped-memo');
Route::view('/advisories', 'pages.deped-advisories');
Route::view('/orders', 'pages.deped-orders');
Route::view('/supportservices', 'pages.supportservices');
Route::view('/faculty', 'pages.faculty');
Route::view('/resources', 'pages.resources');
Route::get('/issuances', fn() => view('pages.issuances'));
Route::get('/load-issuances/{year}', [IssuancesController::class, 'show']);

// Student Portal Routes
Route::prefix('student')->group(function () {
    Route::view('/portal', 'pages.studentportal.student-portal');
    Route::view('/faq', 'pages.studentportal.faqportal');
    Route::view('/dashboard', 'pages.studentportal.dashboard');
    Route::view('/grades', 'pages.studentportal.grades');
    Route::view('/announcement', 'pages.studentportal.announcement');
    Route::view('/examination', 'pages.studentportal.examination');
    Route::view('/profile', 'pages.studentportal.profile');
    Route::view('/schedule', 'pages.studentportal.class-schedule');
    Route::view('/guideenrollment', 'pages.studentportal.guideenrollment');
});

// Teacher Portal Routes
Route::prefix('teacher')->group(function () {
    Route::view('/portal', 'pages.teacherportal.teacher-portal-landing');
    Route::view('/dashboard', 'pages.teacherportal.teacherdashboard');
    Route::view('/managestudent', 'pages.teacherportal.teacher-students');
    Route::view('/gradestudent', 'pages.teacherportal.teacher-grades');
    Route::view('/profile', 'pages.teacherportal.teacher-profile');
    Route::view('/schedule', 'pages.teacherportal.teacher-schedule');
});

// Admin Portal Routes
Route::prefix('admin')->group(function () {
    Route::view('/landing', 'pages.admin.landing');
    Route::view('/dashboard', 'pages.admin.dashboard');
    Route::view('/subjectmanagement', 'pages.admin.subjectmanagement');
    Route::view('/postmanagement', 'pages.admin.postmanagement');
    Route::view('/profile', 'pages.admin.profile');
    
    // Account Management Routes
    Route::get('/accountmanagement', [AccountManagementController::class, 'index'])->name('accountmanagement.index');
    
    // Student Routes
    Route::post('/students', [AccountManagementController::class, 'store'])->name('students.store');
    Route::get('/students/{id}/edit', [AccountManagementController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [AccountManagementController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [AccountManagementController::class, 'destroy'])->name('students.destroy');
    Route::get('/students/create', [AccountManagementController::class, 'createStudent'])->name('students.create');
    Route::post('/students', [AccountManagementController::class, 'storeStudent'])->name('students.store');

    // Teacher Routes
    Route::get('/teachers/{id}/edit', [AccountManagementController::class, 'edit'])->name('teachers.edit');
    Route::put('/teachers/{id}', [AccountManagementController::class, 'update'])->name('teachers.update');
    Route::delete('/teachers/{id}', [AccountManagementController::class, 'destroy'])->name('teachers.destroy');
    // Routes for managing teachers
    Route::get('/teachers/create', [AccountManagementController::class, 'createTeacher'])->name('teachers.create');
    Route::post('/teachers', [AccountManagementController::class, 'storeTeacher'])->name('teachers.store');

});