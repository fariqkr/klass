<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('test', function () {
    dd(Auth::guard('student'));
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('students.dashboard');
});

Route::get('/student/login', [LoginController::class, 'showStudentLoginForm'])->name('login.student');
Route::get('/teacher/login', [LoginController::class, 'showTeacherLoginForm'])->name('login.teacher');

Route::get('/student/register', [RegisterController::class, 'showStudentRegisterForm'])->name('register.student');
Route::post('/student/register', [RegisterController::class, 'registerStudent']);

Route::get('/teacher/register', [RegisterController::class, 'showTeacherRegisterForm'])->name('register.teacher');
Route::post('/teacher/register', [RegisterController::class, 'showTeacherRegisterForm']);
