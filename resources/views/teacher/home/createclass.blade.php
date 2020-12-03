@extends('layouts.teacherhome')

@section('maincontent')
        <div class="container">
            <div class="mb-12 text-black text-4xl font-bold">
                <h1 class="pl-12">Create a Class</h1>
            </div>
            <div class="container">
                <div class="flex flex-wrap flex-col md:flex-row items-center my-8 pl-12 mx-auto rounded-lg">
                    <form action="{{ route('teacher.classroom.create') }}" method="POST">
                        @csrf
                        <div>
                            <label for="class_name" class="tracking-wide text-gray text-base font-bold pb-4">Class Name :</label>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="class_name" id="class_name" placeholder="Input your class name"
                            class="bg-gray-100 border-2 border-blue-400 mt-4 py-4 px-4 rounded-lg @error('class_name') border-red-500 @enderror" value="{{ old('class_name') }}" style="width: 32rem">

                            @error('class_name')
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
