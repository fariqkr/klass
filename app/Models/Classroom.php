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
}
