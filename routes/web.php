<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/identity', function () {
    return view('pages.identity.identity');
});

Route::get('/staffs', function () {
    return view('pages.staff.staffs');
});

Route::get('/notice', function () {
    return view('pages.notice.notice');
});
Route::get('/notice-details', function () {
    return view('pages.notice.notice_details');
});
Route::get('/archives', function () {
    return view('pages.archive.archive');
});
Route::get('/result', function () {
    return view('pages.results.result');
});
Route::get('/admission', function () {
    return view('pages.admission.admission');
});
Route::get('/admission/done', function () {
    return view('pages.admission.aftersubmission');
});
Route::get('/contact', function () {
    return view('pages.contact.contact');
});
Route::get('/student/login', function () {
    return view('pages.login.student');
});

// Student dashboard and profile
Route::get('/student/dashboard', function () {
    return view('pages.dashboard.student');
})->name('student.dashboard');

Route::get('/student/notice/{id?}/details', function ($id = 5) {
    return view('pages.dashboard.students_pages.personal_notice', compact('id'));
})->name('student.personal_notice');

Route::get('/student/result/{id?}/details', function ($id = 5) {
    return view('pages.dashboard.students_pages.personal_result', compact('id'));
})->name('student.personal_result');
