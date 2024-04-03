<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
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
Route::get('instructor.index', [InstructorController::class, 'index'])->name('instructor.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.login');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/log_index', [AuthController::class, 'index'])->name('authen.login');
Route::get('/reg_ceate', [AuthController::class, 'create'])->name('authen.register');

//require __DIR__.'/auth.php';