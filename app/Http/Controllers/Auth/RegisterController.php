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

    public function registerStudent(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);
    }
}
