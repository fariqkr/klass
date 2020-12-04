@extends('layouts.teacherhome')

@section('maincontent')
        <div class="container">
            <div class="mb-12 ml-12 text-black text-4xl font-bold">
                <h1 class="">My Class</h1>
            </div>
            <div class="container w-full">
                @if ($classrooms->count())
                    @foreach ($classrooms as $classroom)
                        <a href="{{ $classroom->path() }}">
                            <div class="flex flex-wrap flex-col md:flex-row items-center bg-white my-8 w-9/12 mx-auto rounded-lg border-2 hover:border-gray-600">
                                <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                                    <h1 class="text-xl text-black text-left mb-4">{{ $classroom->class_name }}</h1>
                                    <h1 class="text-sm text-blacktext-left">{{ $classroom->teacher->name }}</h1>
                                    <p class="text-sm text-left">{{ $classroom->teacher->school_name }}</p>
                                    <p class="text-sm text-left">Code: {{ $classroom->code }}</p>
                                </div>
                                <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                                    <img class="w-full rounded-lg" src="{{asset('img/logo.PNG')}}">
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p class="ml-12">You don't have any classroom yet</p>
                @endif
            </div>
        </div>

@endsection
