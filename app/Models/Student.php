<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'classroom_joined' => 'array',
        'email_verified_at' => 'datetime',
    ];

    public function classrooms() {
        return $this->belongsToMany(Classroom::class);
    }

}
