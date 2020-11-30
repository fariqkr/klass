@extends('layouts.app')

@section('content')

<div class="grid" style="grid-template-columns: 1fr 4fr 1fr;">
    <div class="h-screen bg-white pt-6">
        <div class="mb-6">
            <img src="{{asset('img/logo.PNG')}}" alt="Klass" style="height: 55px;" class="mx-auto">
        </div>
        <div class="text-center mb-8">
            <button class="py-1 px-9 bg-blue-500 text-white rounded hover:bg-blue-700">
                <a href="#">Join a class</a>
            </button>
        </div>
        <div class="text-center border-r-2 border-blue-500">
            <button class="py-1 px-9 bg-white text-black rounded">
                <a href="#" class="text-sm">My Class</a>
            </button>
        </div>
    </div>
    <div class="bg-gray-100 pt-7">
        <div class="container">
            <div class="mb-12 text-black text-4xl font-bold">
                <h1 class="pl-12">Join a Class</h1>
            </div>
            <div class="container">
                <div class="flex flex-wrap flex-col md:flex-row items-center my-8 pl-12 mx-auto rounded-lg">
                    <form action="" method="POST">
                        @csrf
                        <div>
                            <label for="classname" class="tracking-wide text-gray text-base font-bold pb-4">Class Name :</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="classname" id="classname" placeholder="Search your class here"
                            class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('classname') border-red-500 @enderror" value="{{ old('classname') }}" style="width: 32rem">

                            @error('classname')
                                <div class="text-red-500 mt-2 text-base">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-20">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="h-screen bg-white pt-6">
        <div class="mb-6 text-black text-base text-center">
                <a href="#">{{ auth()->guard('student')->user()->name }}</a>
                <button class="px-1 pb-1 bg-red-500 text-white rounded hover:bg-red-600 ml-6">
                    <a href="#" class="text-xs">Logout</a>
                </button>
        </div>
    </div>
</div>

@endsection
