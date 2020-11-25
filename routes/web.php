<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
});

Route::get('/dashboard', function () {
    return view('students.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/student/register', [RegisterController::class, 'showStudentRegisterForm'])->name('register.student');
Route::post('/student/register', [RegisterController::class, 'registerStudent']);

Route::get('/teacher/register', [RegisterController::class, 'showTeacherRegisterForm'])->name('register.teacher');
Route::post('/teacher/register', [RegisterController::class, 'showTeacherRegisterForm']);
