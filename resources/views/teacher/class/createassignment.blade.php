@extends('layouts.teachercourse')

@section('nav')
        <div class="text-center my-2">
            <button class="py-1 px-9 bg-white text-gray-300 rounded">
                <a href="{{ route('teacher.subjectmatter', $classroom->id) }}" class="text-sm">Subject Matter</a>
            </button>
        </div>
        <div class="text-center my-2 border-r-2 border-blue-500">
            <button class="py-1 px-9 bg-white text-black rounded">
                <a href="{{ route('teacher.assignment', $classroom->id) }}" class="text-sm">Assignment</a>
            </button>
        </div>
        <div class="text-center my-2">
            <button class="py-1 px-9 bg-white text-gray-300 rounded">
                <a href="{{ route('teacher.review', $classroom->id) }}" class="text-sm">Review</a>
            </button>
        </div>
@endsection

@section('maincontent')
        <div class="container">
            <div class="flex flex-wrap flex-col md:flex-row items-center bg-white mt-2 mb-10 w-9/12 mx-auto rounded-lg">
                <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                    <h1 class="text-xl text-black text-left mb-4">{{ $classroom->class_name }}</h1>
                    <h1 class="text-sm text-blacktext-left">{{ auth('teacher')->user()->name }}</h1>
                    <p class="text-sm text-left">{{ auth('teacher')->user()->school_name }}</p>
                </div>
                <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                    <img class="w-full rounded-lg" src="{{ asset('img/logo.PNG') }}">
                </div>
            </div>
            <div class="container w-full">
                <div class="my-4 text-black text-xl font-bold mx-auto w-9/12">
                    <h1> Select the type of assignment :</h1>
                </div>

                <div class="container flex flex-nowrap justify-center gap-8">
                        <a href="{{ route('teacher.assignment.create.quiz', $classroom->id) }}">
                            <div class="bg-white my-6 rounded flex col justify-center items-center bg-blue-100 hover:bg-blue-300" style="width: 20rem; height: 20rem;">
                                <h1 class="text-black text-small font-bold">Quiz / Test</h1>
                            </div>
                        </a>
                        <a href="{{ route('teacher.assignment.create.task', $classroom->id) }}">
                            <div class="bg-white my-6 rounded flex col justify-center items-center bg-green-100 hover:bg-green-300" style="width: 20rem; height: 20rem;">
                                <h1 class="text-black text-small font-bold">Task</h1>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
@endsection
