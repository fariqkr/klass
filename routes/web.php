<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/student/login', [LoginController::class, 'showStudentLoginForm'])->name('login.student');
Route::get('/teacher/login', [LoginController::class, 'showTeacherLoginForm'])->name('login.teacher');

Route::get('/student/register', [RegisterController::class, 'showStudentRegisterForm'])->name('register.student');
Route::post('/student/register', [RegisterController::class, 'registerStudent']);

Route::get('/teacher/register', [RegisterController::class, 'showTeacherRegisterForm'])->name('register.teacher');
Route::post('/teacher/register', [RegisterController::class, 'registerTeacher']);

Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');

Route::get('/student/join', function () {
    return view('student.home.joinclass');
});
Route::get('/teacher/createclass', function () {
    return view('teacher.home.createclass');
});

Route::get('/teacher/createsubjectmatter', function () {
    return view('teacher.class.createsubjectmatter');
});

Route::get('/teacher/createassignment', function () {
    return view('teacher.class.createassignment');
});
Route::get('/teacher/createquiztest', function () {
    return view('teacher.class.createquiztest');
});
Route::get('/teacher/createtask', function () {
    return view('teacher.class.createtask');
});

Route::get('/student/subjectmatter', function () {
    return view('student.course.subjectmatter');
});
Route::get('/teacher/subjectmatter', function () {
    return view('teacher.course.subjectmatter');
});

Route::get('/student/assignment', function () {
    return view('student.course.assignment');
});
Route::get('/teacher/assignment', function () {
    return view('teacher.course.assignment');
});

Route::get('/student/review', function () {
    return view('student.course.review');
});
Route::get('/teacher/review', function () {
    return view('teacher.course.review');
});