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
                <h1 class="pl-12">My Class</h1>
            </div>
            <div class="container w-full">
                <a href="#">
                    <div class="flex flex-wrap flex-col md:flex-row items-center bg-white my-8 w-9/12 mx-auto rounded-lg">
                        <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                            <h1 class="text-xl text-black text-left mb-4">Pengolahan Citra Digital</h1>
                            <h1 class="text-sm text-blacktext-left">Wahyono, Ph.D</h1>
                            <p class="text-sm text-left">Universitas Gadjah Mada</p>
                        </div>
                        <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                            <img class="w-full rounded-lg" src="{{asset('img/logo.PNG')}}">
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="flex flex-wrap flex-col md:flex-row items-center bg-white my-8 w-9/12 mx-auto rounded-lg">
                        <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                            <h1 class="text-xl text-black text-left mb-4">Pengembangan Perangkat Lunak</h1>
                            <h1 class="text-sm text-blacktext-left">Azhari SN, MT</h1>
                            <p class="text-sm text-left">Universitas Gadjah Mada</p>
                        </div>
                        <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                            <img class="w-full rounded-lg" src="{{asset('img/logo.PNG')}}">
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="flex flex-wrap flex-col md:flex-row items-center bg-white my-8 w-9/12 mx-auto rounded-lg">
                        <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                            <h1 class="text-xl text-black text-left mb-4">Serverless Architecture</h1>
                            <h1 class="text-sm text-blacktext-left">Giri Kuncoro</h1>
                            <p class="text-sm text-left">CNCF Ambassador</p>
                        </div>
                        <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                            <img class="w-full rounded-lg" src="{{asset('img/logo.PNG')}}">
                        </div>
                    </div>
                </a>
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
