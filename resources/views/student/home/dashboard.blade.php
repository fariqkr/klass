@extends('layouts.studenthome')

@section('maincontent')
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
@endsection
