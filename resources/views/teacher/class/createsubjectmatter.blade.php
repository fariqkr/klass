@extends('layouts.teachercourse')

@section('nav')
        <div class="text-center my-2 border-r-2 border-blue-500">
            <button class="py-1 px-9 bg-white text-black rounded">
                <a href="{{ route('teacher.subjectmatter', $classroom->id) }}" class="text-sm">Subject Matter</a>
            </button>
        </div>
        <div class="text-center my-2">
            <button class="py-1 px-9 bg-white text-gray-300 rounded">
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
            <div class="mb-12 text-black text-4xl font-bold">
                <h1 class="pl-12">Create a Subject Matter</h1>
            </div>
            <div class="container">
                <div class="flex flex-wrap flex-col md:flex-row items-center my-8 pl-12 mx-auto rounded-lg">
                    <form action="{{ route('teacher.subjectmatter.create', $classroom->id) }}" method="POST">
                        @csrf
                        <div>
                            <label for="title" class="tracking-wide text-gray text-base font-bold pb-4">Title :</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="title" id="title" placeholder="This subject title"
                            class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('title') border-red-500 @enderror" value="{{ old('title') }}" style="width: 32rem">

                            @error('title')
                                <div class="text-red-500 mt-2 text-base">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="videolink" class="tracking-wide text-gray text-base font-bold pb-4">Video Link (optional) :</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="videolink" id="videolink" placeholder="Paste video link here"
                            class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('videolink') border-red-500 @enderror" value="{{ old('videolink') }}" style="width: 32rem">

                            @error('videolink')
                                <div class="text-red-500 mt-2 text-base">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="content" class="tracking-wide text-gray text-base font-bold pb-4">Content :</label>
                        </div>
                        <div class="mb-4">
                            <textarea name="content" id="content" cols="100" rows="10" class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('content') border-red-500 @enderror" value="{{ old('content') }}">
                            </textarea>
                            @error('content')
                                <div class="text-red-500 mt-2 text-base">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="bg-green-400 text-white px-4 py-3 rounded font-medium w-24 hover:bg-green-500">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
