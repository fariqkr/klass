<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClassroomController;
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
    Route::get('/student/join', function () {
        return view('student.home.joinclass');
    });
    Route::get('/student/subjectmatter', function () {
        return view('student.course.subjectmatter');
    });
    Route::get('/student/subjectmatter/Test', function () {
        return view('student.class.subjectmatter');
    });
    Route::get('/student/assignment', function () {
        return view('student.course.assignment');
    });
    Route::get('/student/assignment/Task1', function () {
        return view('student.class.task');
    });
    Route::get('/student/review', function () {
        return view('student.course.review');
    });
});

Route::middleware('auth.teacher')->group(function () {
    Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');

    Route::get('/teacher/classroom/create', [ClassroomController::class, 'showCreateClassroom'])->name('classroom.create');
    Route::post('/teacher/classroom/create', [ClassroomController::class, 'store']);

    Route::get('/teacher/classroom/{classroom}/subject-matter', [SubjectMatterController::class, 'index'])->name('subjectmatter');
    Route::get('/teacher/classroom/{classroom}/subject-matter/create', [SubjectMatterController::class, 'create'])->name('subjectmatter.create');
    Route::post('/teacher/classroom/{classroom}/subject-matter/create', [SubjectMatterController::class, 'store']);
    Route::get('/teacher/classroom/{classroom}/subject-matter/{subject}', [SubjectMatterController::class, 'show'])->name('subjectmatter.show');

    Route::get('/teacher/classroom/{classroom}/assignment', [AssignmentController::class, 'index'])->name('assignment');
    Route::get('/teacher/classroom/{classroom}/assignment/create', [AssignmentController::class, 'create'])->name('assignment.create');
    Route::get('/teacher/classroom/{classroom}/assignment/task/create', [AssignmentController::class, 'createTask'])->name('assignment.create.task');
    Route::post('/teacher/classroom/{classroom}/assignment/task/create', [AssignmentController::class, 'storeTask']);
    Route::get('/teacher/classroom/{classroom}/assignment/quiz/create', [AssignmentController::class, 'createQuiz'])->name('assignment.create.quiz');
    Route::post('/teacher/classroom/{classroom}/assignment/quiz/create', [AssignmentController::class, 'storeQuiz']);
    Route::get('/teacher/classroom/{classroom}/assignment/{assignment}/input', [AssignmentController::class, 'input'])->name('assignment.input');
    Route::post('/teacher/classroom/{classroom}/assignment/{assignment}/input', [AssignmentController::class, 'storeInput']);
    Route::get('/teacher/classroom/{classroom}/assignment/{assignment}', [AssignmentController::class, 'show']);

    Route::get('/teacher/assignment', function () {
        return view('teacher.course.assignment');
    });
    Route::get('/teacher/assignment/create-form', function () {
        return view('teacher.class.createassignment');
    });
    Route::get('/teacher/assignment/quiz/create', function () {
        return view('teacher.class.createquiztest');
    });
    Route::get('/teacher/assignment/task/create', function () {
        return view('teacher.class.createtask');
    });
    Route::get('/teacher/inputtask', function () {
        return view('teacher.class.inputtask');
    });
    Route::get('/teacher/review', function () {
        return view('teacher.course.review');
    });
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
