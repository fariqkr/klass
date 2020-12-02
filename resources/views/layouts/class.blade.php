@extends('layouts.app')

@section('content')

<nav class="py-6 bg-white border-b-4 border-gray-300">
    <div class="container mx-auto flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/" class="text-gray-400 hover:text-black">
                    Back to Class
                </a>
            </li>
        </ul>
        <ul class="flex items-center">
            @if (auth('student')->check())
                <li>
                    <a href="/" class="p-3 mr-4 text-base text-black">{{ auth('student')->user()->name }}</a>
                </li>
                <li>
                    <form action="/" method="post" class="inline p-3 text-white bg-red-500 rounded hover:bg-red-700">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @elseif (auth('teacher')->check())
                <li>
                    <a href="/" class="p-3 mr-4 text-base text-black">{{ auth('teacher')->user()->name }}</a>
                </li>
                <li>
                    <form action="/" method="post" class="inline p-3 text-white bg-red-500 rounded hover:bg-red-700">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endif
        </ul>
    </div>
</nav>

<div class="container w-full mx-auto">
    @yield('maincontent')
</div>

@endsection
