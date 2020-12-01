@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-r from-blue-300 to-green-400 pt-12 pb-16 md:pt-8 px-8 h-screen" id="login">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center px-10">
            <div class="w-full xl:w-7/12 py-6 overflow-y-hidden">
                <img class="w-5/6 lg:mr-0" src="{{ asset('img/teacher-illustration.svg') }}">
            </div>
            <div class="flex flex-col w-full xl:w-5/12 justify-center overflow-y-hidden">
                <div class="bg-blue-500 px-4 py-8 flex gap-2">
                    <a class="text-gray-600 font-extrabold text-center text-3xl inline mx-auto" href="{{ route('login.teacher') }}"> LOGIN </a>
                    <p class="text-black font-extrabold text-center text-3xl inline mx-auto"> | </p>
                    <span class="text-blck font-extrabold text-center text-3xl inline mx-auto text-underline-custom"> SIGN UP </span>
                </div>
                <div class="bg-white pt-2 pb-8 px-20">
                    <div>
                        <p class="pt-2 text-black">Currently signing up as <span class="font-bold text-black">Teacher</span>.</p>
                    <p class="pb-4 text-gray-500 text-sm"> or sign up as Student <a class="underline" href="{{ route('register.student') }}">here</a></p>
                    </div>
                    <form action="{{ route('register.teacher') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="uppercase tracking-wide text-gray text-xs font-bold">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Name"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nickname" class="uppercase tracking-wide text-gray text-xs font-bold">Nickname</label>
                            <input type="text" name="nickname" id="nickname" placeholder="Nickname"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('nickname') border-red-500 @enderror" value="{{ old('nickname') }}">

                            @error('nickname')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="school_name" class="uppercase tracking-wide text-gray text-xs font-bold">High School Name</label>
                            <input type="text" name="school_name" id="school_name" placeholder="High School"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('school_name') }}">

                            @error('school_name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

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
                            <label for="password_confirmation" class="uppercase tracking-wide text-gray text-xs font-bold">Repeat your password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                            @error('password_confirmation')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-pink-600 text-white px-4 py-3 rounded font-medium w-full">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

