<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountManagementController;

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
Route::view('/inssuances', 'pages.inssuances');
Route::view('/supportservices', 'pages.supportservices');
Route::view('/faculty', 'pages.faculty');
Route::view('/resources', 'pages.resources');

// Issuances by Year (Group them together for better organization)
Route::prefix('issuances')->group(function () {
    Route::view('/2020', 'pages.issuancesitems.2020');
    Route::view('/2021', 'pages.issuancesitems.2021');
    Route::view('/2022', 'pages.issuancesitems.2022');
    Route::view('/2023', 'pages.issuancesitems.2023');
    Route::view('/2024', 'pages.issuancesitems.2024');
});

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
    Route::view('/accountmanagement', 'pages.admin.accountmanagement')->name('accountmanagement.index');
    Route::view('/profile', 'pages.admin.profile');

    Route::view('/accountmanagement', 'pages.admin.accountmanagement')->name('accountmanagement.index');
    Route::get('students', [AccountManagementController::class, 'index'])->name('students.index');
    Route::post('students', [AccountManagementController::class, 'store'])->name('students.store');
    Route::get('students/{id}/edit', [AccountManagementController::class, 'edit'])->name('students.edit');
    Route::put('students/{id}', [AccountManagementController::class, 'update'])->name('students.update');
    Route::delete('students/{id}', [AccountManagementController::class, 'destroy'])->name('students.destroy');
});