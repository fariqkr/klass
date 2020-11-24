@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <h1 class="mb-3">Register as a Student!</h1>
            <form action="{{ route('register.student') }}" method="POST">
                <div class="mb-4">
                    <label for="name" class="sr-only">Nama</label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </form>
        </div>
    </div>
@endsection
