<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logoutStudent() {
        Auth::guard('student')->logout();

        return redirect()->route('home');
    }

    public function logoutTeacher() {
        Auth::guard('teacher')->logout();

        return redirect()->route('home');
    }
}
