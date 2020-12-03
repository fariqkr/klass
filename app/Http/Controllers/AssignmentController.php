<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Classroom;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class AssignmentController extends Controller
{
    public function index(Classroom $classroom) {
        $assignments = Assignment::where('classroom_id', $classroom->id)->get();

        return view('teacher.course.assignment', [
            'classroom' => $classroom,
            'assignments' => $assignments
        ]);
    }

    public function create(Classroom $classroom) {
        return view('teacher.class.createassignment', [
            'classroom' => $classroom
        ]);
    }

    public function createTask(Classroom $classroom) {
        return view('teacher.class.createtask');
    }

    public function storeTask(Request $request, Classroom $classroom) {
        return 'stored task';
    }

    public function createQuiz(Classroom $classroom) {
        return view('teacher.class.createquiztest', [
            'classroom' => $classroom
        ]);
    }

    public function storeQuiz(Request $request, Classroom $classroom) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'number_of_multiple_choice' => 'required|integer|max:10',
            'number_of_essay' => 'required|integer|max:10',
        ]);

        $classroom->assignments()->create([
            'title' => $request->title,
            'number_of_multiple_choice' => $request->number_of_multiple_choice,
            'number_of_essay' => $request->number_of_essay,
            'is_task' => false
        ]);

        return redirect()->route('assignment', $classroom->id);
    }

    public function input(Classroom $classroom, Assignment $assignment) {
        return view('teacher.class.inputtask', [
            'classroom' => $classroom,
            'assignment' => $assignment
        ]);
    }

    public function storeInput(Request $request, $classroom, $assignment) {
        $this->validate($request, [
            'question' => 'required'
        ]);

        $assignment = Assignment::where('id', $assignment)->first();

        if (!$assignment->questions) {
            $questions = [];
        } else {
            $questions = $assignment->questions;
        }

        $questions[] = [
            'type' => 'essay',
            'question' => $request->question
        ];

        $assignment->questions = $questions;
        $assignment->save();

        return redirect()->route('assignment', [$classroom]);
    }

    public function show(Classroom $classroom) {
        return 'show single task or quiz';
    }
}
