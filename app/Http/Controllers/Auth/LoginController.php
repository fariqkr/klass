<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showStudentLoginForm() {
        return view('auth.login-student');
    }

    public function showTeacherLoginForm() {
        return view('auth.login-teacher');
    }

    public function loginStudent(Request $request) {
        //
    }

    public function loginTeacher(Request $request) {
        //
    }

}
