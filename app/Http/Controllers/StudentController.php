<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        dd(auth()->guard('student')->user());
        return view('students.dashboard');
    }
}
