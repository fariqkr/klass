<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Classroom $classroom) {
        return view('teacher.course.review', [
            'classroom' => $classroom
        ]);
    }
}
