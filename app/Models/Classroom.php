<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'code'
    ];

    protected $casts = [
        'assignments' => 'array',
        'students_joined' => 'array'
    ];

    public function students() {
        return $this->belongsToMany(Student::class);
    }

    public function subjectMatters() {
        return $this->hasMany(SubjectMatter::class);
    }

    public function assignments() {
        return $this->hasMany(Assignment::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function path() {
        return "/teacher/classroom/{$this->id}/subject-matter";
    }
}
