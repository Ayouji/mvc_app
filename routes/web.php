<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
/* Route::get('/students', function () {
    return view('student');
}); */
Route::get('/student', [UniversityController::class, 'search'])->name('student');
Route::get('/student/create', [UniversityController::class, 'create'])->name('student.create');
Route::post('/student/store', [UniversityController::class, 'store'])->name('student.store');
Route::get('/student/detail/{student_id}', [UniversityController::class, 'show'])->name('student.detail');
Route::get('/student/edit/{student_id}', [UniversityController::class, 'edit'])->name('student.edit');
Route::put('/student/update/{student_id}', [UniversityController::class, 'update']);
Route::get('/student/delete/{student_id}', [UniversityController::class, 'destroy'])->name('student.delete');

Route::get('course.index', [CourseController::class, 'index'])->name('course.index');
