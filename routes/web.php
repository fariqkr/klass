<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectMatterController;
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
})->name('home')->middleware('guest');

Route::middleware('auth.student')->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');

    Route::get('/student/classroom/join', [StudentController::class, 'join'])->name('student.classroom.join');
    Route::post('/student/classroom/join', [StudentController::class, 'link']);

    Route::get('/student/classroom/{classroom}/subject-matter', [SubjectMatterController::class, 'index'])->name('student.subjectmatter');
    Route::get('/student/classroom/{classroom}/subject-matter/{subject}', [SubjectMatterController::class, 'show'])->name('student.subjectmatter.show');

    Route::get('/student/classroom/{classroom}/assignment', [AssignmentController::class, 'index'])->name('student.assignment');
    Route::get('/student/classroom/{classroom}/assignment/{assignment}', [AssignmentController::class, 'show'])->name('student.assignment.show');
    Route::post('/student/classroom/{classroom}/assignment/{assignment}', [AssignmentController::class, 'answer']);

    Route::get('/student/classroom/{classroom}/review', [ReviewController::class, 'index'])->name('student.review');
});

Route::middleware('auth.teacher')->group(function () {
    Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');

    Route::get('/teacher/classroom/create', [ClassroomController::class, 'showCreateClassroom'])->name('teacher.classroom.create');
    Route::post('/teacher/classroom/create', [ClassroomController::class, 'store']);

    Route::get('/teacher/classroom/{classroom}/subject-matter', [SubjectMatterController::class, 'index'])->name('teacher.subjectmatter');
    Route::get('/teacher/classroom/{classroom}/subject-matter/create', [SubjectMatterController::class, 'create'])->name('teacher.subjectmatter.create');
    Route::post('/teacher/classroom/{classroom}/subject-matter/create', [SubjectMatterController::class, 'store']);
    Route::get('/teacher/classroom/{classroom}/subject-matter/{subject}', [SubjectMatterController::class, 'show'])->name('teacher.subjectmatter.show');

    Route::get('/teacher/classroom/{classroom}/assignment', [AssignmentController::class, 'index'])->name('teacher.assignment');
    Route::get('/teacher/classroom/{classroom}/assignment/create', [AssignmentController::class, 'create'])->name('teacher.assignment.create');
    Route::get('/teacher/classroom/{classroom}/assignment/task/create', [AssignmentController::class, 'createTask'])->name('teacher.assignment.create.task');
    Route::post('/teacher/classroom/{classroom}/assignment/task/create', [AssignmentController::class, 'storeTask']);
    Route::get('/teacher/classroom/{classroom}/assignment/quiz/create', [AssignmentController::class, 'createQuiz'])->name('teacher.assignment.create.quiz');
    Route::post('/teacher/classroom/{classroom}/assignment/quiz/create', [AssignmentController::class, 'storeQuiz']);
    Route::get('/teacher/classroom/{classroom}/assignment/{assignment}/input', [AssignmentController::class, 'input'])->name('teacher.assignment.input');
    Route::post('/teacher/classroom/{classroom}/assignment/{assignment}/input', [AssignmentController::class, 'storeInput']);
    Route::get('/teacher/classroom/{classroom}/assignment/{assignment}', [AssignmentController::class, 'show']);

    Route::get('/teacher/classroom/{classroom}/review', [ReviewController::class, 'index'])->name('teacher.review');
});

Route::middleware('guest.custom')->group(function () {
    Route::get('/student/register', [RegisterController::class, 'showStudentRegisterForm'])->name('register.student');
    Route::post('/student/register', [RegisterController::class, 'registerStudent']);

    Route::get('/teacher/register', [RegisterController::class, 'showTeacherRegisterForm'])->name('register.teacher');
    Route::post('/teacher/register', [RegisterController::class, 'registerTeacher']);

    Route::get('/student/login', [LoginController::class, 'showStudentLoginForm'])->name('login.student');
    Route::post('/student/login', [LoginController::class, 'loginStudent'])->name('login.student');

    Route::get('/teacher/login', [LoginController::class, 'showTeacherLoginForm'])->name('login.teacher');
    Route::post('/teacher/login', [LoginController::class, 'loginTeacher'])->name('login.teacher');

});

Route::post('/student/logout', [LogoutController::class, 'logoutStudent'])->name('logout.student');
Route::post('/teacher/logout', [LogoutController::class, 'logoutTeacher'])->name('logout.teacher');
