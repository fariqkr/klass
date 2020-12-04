<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $classrooms = auth('student')->user()->classrooms;

        return view('student.home.dashboard', [
            'classrooms' => $classrooms
        ]);
    }

    public function join() {
        return view('student.home.joinclass');
    }

    public function link(Request $request) {
        $this->validate($request, [
            'class_code' => 'required|exists:classrooms,code'
        ]);

        $classroom = Classroom::where('code', $request->class_code)->first();

        auth('student')->user()->classrooms()->attach($classroom);

        return redirect()->route('student.dashboard');
    }
}
