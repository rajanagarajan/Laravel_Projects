<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     //return view('welcome');
//     return view('student-reg');
// });

Route::get('/', [StudentController::class, 'viewForm'])->name('home'); /* route name assigned */
Route::post('/add-student', [StudentController::class, 'addStudent']);