@extends('layouts.studentcourse')

@section('nav')
        <div class="text-center my-2">
            <button class="py-1 px-9 bg-white text-gray-300 rounded">
                <a href="{{ route('student.subjectmatter', $classroom->id) }}" class="text-sm">Subject Matter</a>
            </button>
        </div>
        <div class="text-center my-2">
            <button class="py-1 px-9 bg-white text-gray-300 rounded">
                <a href="{{ route('student.assignment', $classroom->id) }}" class="text-sm">Assignment</a>
            </button>
        </div>
        <div class="text-center my-2 border-r-2 border-blue-500">
            <button class="py-1 px-9 bg-white text-black rounded">
                <a href="{{ route('student.review', $classroom->id) }}" class="text-sm">Review</a>
            </button>
        </div>
@endsection

@section('maincontent')
        <div class="container">
            <div class="flex flex-wrap flex-col md:flex-row items-center bg-white mt-2 mb-10 w-9/12 mx-auto rounded-lg">
                <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                    <h1 class="text-xl text-black text-left mb-4">{{ $classroom->class_name }}</h1>
                    <h1 class="text-sm text-blacktext-left">{{ $classroom->teacher->name }}</h1>
                    <p class="text-sm text-left">{{ $classroom->teacher->school_name }}</p>
                </div>
                <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                    <img class="w-full rounded-lg" src="{{asset('img/logo.PNG')}}">
                </div>
            </div>
            <div class="container w-full">
                <div class="my-4 text-black text-xl font-bold mx-auto w-9/12">
                    <h1>Review :</h1>
                </div>
                <div class="bg-white w-9/12 mx-auto my-6 rounded flex border-2 hover:border-gray-300">
                        <h1 class="text-black text-base w-11/12 px-4 py-4">Task1</h1>
                        <h1 class="text-black text-small italic font-bold w-1/12 bg-gray-200 px-4 py-4">00</h1>
                </div>
            </div>
        </div>
@endsection
