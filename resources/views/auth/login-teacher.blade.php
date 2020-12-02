@extends('layouts.app')

@section('content')

<section class="bg-gradient-to-r from-blue-300 to-green-400 pt-12 pb-16 md:pt-8 px-8 h-screen" id="login">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
        <div class="w-full xl:w-7/12 py-6 overflow-y-hidden">
            <img class="w-5/6 lg:mr-0" src="{{ asset('img/teacher-illustration.svg') }}">
        </div>
        <div class="flex flex-col w-full xl:w-5/12 justify-center overflow-y-hidden">
            <div class="bg-blue-500 px-4 py-8 flex gap-2">
                <span class="text-black font-extrabold text-center text-3xl inline mx-auto text-underline-custom"> LOGIN </span>
                <p class="text-black font-extrabold text-center text-3xl inline mx-auto"> | </p>
                <a class="text-gray-600 font-extrabold text-center text-3xl inline mx-auto" href="{{ route('register.teacher') }}"> SIGN UP </a>
            </div>
            <div class="bg-white pb-16 pt-5 px-20">
                <div>
                    <p class="pt-2 text-black">Currently logging in as <span class="font-bold text-black">Teacher</span>.</p>
                    <p class="pb-4 text-gray-500 text-sm"> or login as Student <a class="underline" href="{{route('login.student')}}">here</a></p>
                    @if (session('status'))
                        <div class="bg-red-400 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form action="{{ route('login.teacher') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="uppercase tracking-wide text-gray text-xs font-bold">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="uppercase tracking-wide text-gray text-xs font-bold">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" class="mr-2">
                            <label for="remember">Remember me</label>
                        </div>
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
