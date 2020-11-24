<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showStudentRegisterForm() {
        return view('auth.register-student');
    }

    public function showTeacherRegisterForm() {
        return view('auth.register-teacher');
    }
}
