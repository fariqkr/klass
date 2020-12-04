<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'number_of_multiple_choice',
        'number_of_essay',
        'is_task',
    ];

    protected $casts = [
        'is_task' => 'boolean',
        'questions' => 'array'
    ];

    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }

    public function path() {
        return "/teacher/classroom/{$this->classroom->id}/assignment/{$this->id}";
    }

}
