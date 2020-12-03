@extends('layouts.studenthome')

@section('maincontent')
        <div class="container">
            <div class="mb-12 text-black text-4xl font-bold">
                <h1 class="pl-12">My Class</h1>
            </div>
            <div class="container w-full">
                @if ($classrooms->count())
                    @foreach ($classrooms as $classroom)
                        <a href="{{ route('student.subjectmatter', $classroom->id) }}">
                            <div class="flex flex-wrap flex-col md:flex-row items-center bg-white my-8 w-9/12 mx-auto rounded-lg border-2 hover:border-gray-600">
                                <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                                    <h1 class="text-xl text-black text-left mb-4">{{ $classroom->class_name }}</h1>
                                    <h1 class="text-sm text-blacktext-left">{{ $classroom->teacher->name }}</h1>
                                    <p class="text-sm text-left">{{ $classroom->teacher->school_name }}</p>
                                </div>
                                <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                                    <img class="w-full rounded-lg" src="{{asset('img/logo.PNG')}}">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p class="ml-12">You didn't join any classroom yet</p>
                @endif
            </div>
        </div>
@endsection
