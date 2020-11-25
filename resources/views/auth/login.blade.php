@extends('layouts.app')

@section('content')

<section class="bg-gradient-to-r from-blue-300 to-green-400 pt-12 pb-16 md:pt-8 px-8 h-screen" id="login">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
        <div class="w-full xl:w-7/12 py-6 overflow-y-hidden">
            <img class="w-5/6 lg:mr-0" src="http://www.pngall.com/wp-content/uploads/5/Learning-PNG-Free-Download.png">
        </div>
        <div class="flex flex-col w-full xl:w-5/12 justify-center overflow-y-hidden">
            <div class="bg-blue-500 px-4 py-8">
                <span class="text-black font-extrabold text-center text-3xl inline mx-9"> LOGIN </span>
                <p class="text-black font-extrabold text-center text-3xl inline mx-9 "> | </p>
                <a class="text-gray-600 font-extrabold text-center text-3xl inline mx-9" href="{{ route('register.student') }}"> SIGN UP </a>
            </div>
            <div class="bg-white py-16 px-20">
                <form action="" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-pink-600 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
