<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\SubjectMatter;

class SubjectMatterController extends Controller
{
    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }

    public function indexSubjectMatter(Classroom $classroom) {
        $subjects = SubjectMatter::where('classroom_id', $classroom->id)->get();

        return view('teacher.course.subjectmatter', [
            'classroom' => $classroom,
            'subjects' => $subjects
        ]);
    }

    public function showSubjectMatter(Classroom $classroom, SubjectMatter $subject) {
        return "a single subjectmatter: {$subject->title}";
    }

    public function createSubjectMatter(Classroom $classroom) {
        return view('teacher.class.createsubjectmatter', [
            'classroom' => $classroom
        ]);
    }

    public function storeSubjectMatter(Classroom $classroom, Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'link' => 'url',
            'content' => 'required'
        ]);

        $classroom->subjectMatters()->create([
            'title' => $request->title,
            'link' => $request->link,
            'content' => $request->content
        ]);

        return redirect()->route('subjectmatter', $classroom->id);
    }
}
