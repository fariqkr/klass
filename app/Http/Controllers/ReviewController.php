<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Classroom $classroom) {
        if (auth('student')->check()) {
            $view = 'student.course.review';
        } else {
            $view = 'teacher.course.review';
        }

        return view($view, [
            'classroom' => $classroom
        ]);
    }
}
