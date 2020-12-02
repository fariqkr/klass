<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        $classrooms = Classroom::get();

        return view('teacher.home.dashboard', [
            'classrooms' => $classrooms
        ]);
    }

    public function createClassroom(Request $request) {

    }
}
