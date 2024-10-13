<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountManagementController;
use App\Http\Controllers\IssuancesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FacultyMemberController;
use App\Http\Controllers\AdminController;

// Welcome and Static Pages
Route::get('/', [WelcomeController::class, 'welcome']);

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
Route::get('/faculty', [FacultyController::class, 'index'])->name('faculty.index');
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
// Admin Portal Routes
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    // All routes here will be authenticated
    Route::view('/landing', 'pages.admin.landing');
    Route::view('/subjectmanagement', 'pages.admin.subjectmanagement');
    // posts
    Route::get('/postmanagement', [PostsController::class, 'index'])->name('posts.index');
    Route::get('/postmanagement/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('/postmanagement', [PostsController::class, 'store'])->name('posts.store');
    Route::put('/postmanagement/{id}', [PostsController::class, 'update'])->name('posts.update');
    Route::delete('/postmanagement/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');

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

    Route::get('/slide', [SlideController::class, 'adminIndex'])->name('admin.slide.index');
    Route::post('/slide', [SlideController::class, 'store'])->name('admin.slide.store');
    Route::delete('/slide/{id}', [SlideController::class, 'destroy'])->name('admin.slide.destroy');

    Route::get('/facultymanagement', [FacultyMemberController::class, 'index'])->name('admin.facultymanagement');
    Route::post('/facultymanagement', [FacultyMemberController::class, 'store'])->name('admin.facultymanagement.store');
    Route::get('/facultymanagement/{facultyMember}/edit', [FacultyMemberController::class, 'edit'])->name('admin.facultymanagement.edit');
    Route::put('/facultymanagement/{facultyMember}', [FacultyMemberController::class, 'update'])->name('admin.facultymanagement.update');
    Route::delete('/facultymanagement/{facultyMember}', [FacultyMemberController::class, 'destroy'])->name('admin.facultymanagement.destroy');
    Route::get('/facultymanagement/{facultyMember}', [FacultyMemberController::class, 'show'])->name('admin.facultymanagement.show');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

});

// Login and Authenticate routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});