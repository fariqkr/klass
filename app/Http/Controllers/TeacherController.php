<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        $classrooms = Classroom::where('teacher_id', auth('teacher')->user()->id)->get();

        return view('teacher.home.dashboard', [
            'classrooms' => $classrooms
        ]);
    }
}
