<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\SubjectMatter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function showCreateClassroom() {
        return view('teacher.home.createclass');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'class_name' => 'required|max:255'
        ]);

        auth('teacher')->user()->classrooms()->create([
            'class_name' => $request->class_name,
            'code' => strtoupper(Str::random(4))
        ]);

        return redirect()->route('teacher.dashboard');
    }

}
