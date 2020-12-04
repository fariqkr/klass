<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'school_name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'classroom_teached' => 'array',
        'email_verified_at' => 'datetime',
    ];

    public function classrooms() {
        return $this->hasMany(Classroom::class);
    }
}
