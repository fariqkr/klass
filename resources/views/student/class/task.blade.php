@extends('layouts.class')

@section('maincontent')

<div class="flex flex-col container w-5/6 mx-auto my-4 py-8 px-16 border-2 border-gray-100 gap-4">
    <div class="text-center">
        <h1 class="text-2xl bg-gray-50 font-bold mx-auto py-4">{{ $assignment->title }}</h1>
    </div>
    <div class="flex flex-row gap-4">
        <div class="bg-gray-50 w-1/3 h-full">
            <div class="mx-auto text-center w-1/2 py-2">
                <h1 class="text-base py-1 bg-blue-500 text-white rounded-lg">Question List</h1>
            </div>
            <div class="px-3 py-3" style="display: grid; grid-template-columns: repeat(5, 1fr); grid-template-rows: repeat(2, 1fr); grid-column-gap: 12px; grid-row-gap: 12px;">
                <div class="text-center bg-blue-500 p-2 rounded-md text-white" style="grid-area: 1 / 1 / 2 / 2;">
                    <h1 class="text-sm font-bold">1</h1>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 w-2/3">
            <div class="mx-auto py-4 px-6">
                <h1 class="text-xl font-bold">Question:</h1>
            </div>
            <div class="mx-auto px-6">
                <p class="text-base mb-4">{{ $questions[0]['question'] }}</p>
                <form action="{{ route('student.assignment.show', [$classroom->id, $assignment->id]) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <textarea name="answer" id="answer" cols="70" rows="10" class="bg-gray-50 border-2 border-gray-300 py-4 px-4 rounded-lg @error('answer') border-red-500 @enderror" value="{{ old('answer') }}">
                        </textarea>
                        @error('answer')
                            <div class="text-red-500 mt-2 text-base">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="flex justify-end mr-6">
                        <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-24 hover:bg-green-600">Finish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
