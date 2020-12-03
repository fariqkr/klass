<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\SubjectMatter;

class SubjectMatterController extends Controller
{
    public function index(Classroom $classroom) {
        $subjects = SubjectMatter::where('classroom_id', $classroom->id)->get();

        if (auth('student')->check()) {
            $view = 'student.course.subjectmatter';
        } else {
            $view = 'teacher.course.subjectmatter';
        }

        return view($view, [
            'classroom' => $classroom,
            'subjects' => $subjects
        ]);
    }

    public function show(Classroom $classroom, SubjectMatter $subject) {
        if (auth('student')->check()) {
            $view = 'student.class.subjectmatter';
        } else {
            $view = 'teacher.class.subjectmatter';
        }

        return view($view, [
            'classroom' => $classroom,
            'subject' => $subject
        ]);
    }

    public function create(Classroom $classroom) {
        return view('teacher.class.createsubjectmatter', [
            'classroom' => $classroom
        ]);
    }

    public function store(Classroom $classroom, Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'videolink' => 'url',
            'content' => 'required'
        ]);

        $videolink = $this->getYoutubeEmbedUrl($request->videolink);

        $classroom->subjectMatters()->create([
            'title' => $request->title,
            'url' => $videolink,
            'content' => $request->content
        ]);

        return redirect()->route('teacher.subjectmatter', $classroom->id);
    }

    private function getYoutubeEmbedUrl($url) {
         $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
         $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        return 'https://www.youtube.com/embed/' . $youtube_id ;
    }
}
