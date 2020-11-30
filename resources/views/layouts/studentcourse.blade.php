@extends('layouts.app')

@section('content')

<div class="grid" style="grid-template-columns: 1fr 4fr 1fr;">
    <div class="h-screen bg-white pt-6">
        <div class="mb-12">
            <img src="{{asset('img/logo.PNG')}}" alt="Klass" style="height: 55px;" class="mx-auto">
        </div>

        @yield('nav')

    </div>
    <div class="bg-gray-100 pt-7">

        @yield('maincontent')
        
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
