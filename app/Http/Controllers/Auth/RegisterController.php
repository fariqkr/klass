<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'nickname' => 'required|max:255',
            'email' => 'required|email|unique:students|max:255',
            'password' => 'required|confirmed',
        ]);

        Student::create([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::guard('student')->attempt($request->only('email', 'password'));

        return redirect()->route('student.dashboard');
    }

    public function registerTeacher(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'nickname' => 'required|max:255',
            'school_name' => 'required|max:255',
            'email' => 'required|email|unique:teachers|max:255',
            'password' => 'required|confirmed',
        ]);

        Teacher::create([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'school_name' => $request->school_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::guard('teacher')->attempt($request->only('email', 'password'));

        return redirect()->route('teacher.dashboard');

    }
}
