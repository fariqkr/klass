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
                <div class="my-4 text-black text-3xl font-bold mx-auto pl-12">
                    <h1> Create new Task :</h1>
                </div>

                <div class="container">
                    <div class="flex flex-wrap flex-col md:flex-row items-center my-8 pl-12 mx-auto rounded-lg">
                        <form action="" method="POST">
                            @csrf
                            <div>
                                <label for="classname" class="tracking-wide text-gray text-base font-bold pb-4">Title :</label>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="classname" id="classname" placeholder="Input title for this task"
                                class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('classname') border-red-500 @enderror" value="{{ old('classname') }}" style="width: 32rem">

                                @error('classname')
                                    <div class="text-red-500 mt-2 text-base">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="mc" class="tracking-wide text-gray text-base font-bold pb-4">Number of Multiple Choice questions :</label>
                            </div>
                            <div class="mb-4">
                                <input type="number" name="mc" id="mc" placeholder="maximum: 10"
                                class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('mc') border-red-500 @enderror" value="{{ old('mc') }}" style="width: 32rem">

                                @error('mc')
                                    <div class="text-red-500 mt-2 text-base">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="essay" class="tracking-wide text-gray text-base font-bold pb-4">Number of Essay questions :</label>
                            </div>
                            <div class="mb-4">
                                <input type="number" name="essay" id="essay" placeholder="maximum: 10"
                                class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('essay') border-red-500 @enderror" value="{{ old('essay') }}" style="width: 32rem">

                                @error('essay')
                                    <div class="text-red-500 mt-2 text-base">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <button type="submit" class="bg-green-400 text-white px-4 py-3 rounded font-medium w-20 hover:bg-green-500">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
@endsection
