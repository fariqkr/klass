@extends('layouts.app')

@section('content')
{{-- Navigasi --}}
<nav class="py-6 bg-white border-b-4 border-gray-300">
    <div class="container mx-auto flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/">
                    <img src="{{asset('img/logo.PNG')}}" alt="Klass" style="height: 45px;" class="mx-8">
                </a>
            </li>
        </ul>
        <ul class="flex items-center">
            @if (auth('student')->check())
                <li>
                    <a href="{{ route('student.dashboard') }}" class="p-3 mx-1 text-blue-500 font-bold hover:text-blue-700">{{ auth('student')->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout.student') }}" method="post" class="inline p-3 text-white bg-blue-500 rounded hover:bg-blue-700">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @elseif (auth('teacher')->check())
                <li>
                    <a href="{{ route('teacher.dashboard') }}" class="p-3 mx-1 text-blue-500 font-bold hover:text-blue-700">{{ auth('teacher')->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout.teacher') }}" method="post" class="inline p-3 text-white bg-blue-500 rounded hover:bg-blue-700">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login.student') }}" class="p-3 text-white bg-blue-500 rounded hover:bg-blue-700"> Login / Signup </a>
                </li>
            @endif
        </ul>
    </div>
</nav>

{{-- Home --}}
<section class="pt-12 pb-24 bg-blue-300 md:pt-8 px-8" id="home">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
    <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
        <h1 class="my-4 text-3xl md:text-5xl text-black font-bold leading-tight text-center md:text-left">Maintain your online classes</h1>
        <p class="text-base md:text-2xl mb-8 text-center md:text-left">Get a free and easy tool to help educators efficiently manage and assess progress, while enhancing connections with learners from school, from home, or on the go.</p>
        @if (! (auth()->guard('student')->check() || auth()->guard('teacher')->check()))
            <a href="{{ route('register.student') }}" >
                <button class="p-4 bg-blue-500 text-white rounded-lg hover:bg-blue-700">
                    Sign Up Now
                </button>
            </a>
        @else
            <a href="{{ route('student.dashboard') }}" >
                <button class="p-4 bg-blue-500 text-white rounded-lg hover:bg-blue-700">
                    Dashboard
                </button>
            </a>
        @endif
    </div>

    <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
        <img class="w-4/6 mx-auto lg:mr-0" src="{{ asset('img/landing-illustration.png') }}">
    </div>
    </div>
</section>

@endsection
