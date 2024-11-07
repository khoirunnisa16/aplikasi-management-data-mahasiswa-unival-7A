<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/student/create', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student/{id}', [StudentController::class, 'show'])->name('student.show');

Route::resource('student', \App\Http\Controllers\StudentController::class);