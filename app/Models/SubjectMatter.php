<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectMatter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'content'
    ];

    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }

    public function path() {
        return "/teacher/classroom/{$this->classroom->id}/subject-matter/{$this->id}";
    }
}
