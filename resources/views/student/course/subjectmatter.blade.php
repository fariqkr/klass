@extends('layouts.studentcourse')

@section('nav')
        <div class="text-center my-2 border-r-2 border-blue-500">
            <button class="py-1 px-9 bg-white text-black rounded">
                <a href="#" class="text-sm">Subject Matter</a>
            </button>
        </div>
        <div class="text-center my-2">
            <button class="py-1 px-9 bg-white text-gray-300 rounded">
                <a href="#" class="text-sm">Assignment</a>
            </button>
        </div>
        <div class="text-center my-2">
            <button class="py-1 px-9 bg-white text-gray-300 rounded">
                <a href="#" class="text-sm">Review</a>
            </button>
        </div>
@endsection

@section('maincontent')
        <div class="container">
            <div class="flex flex-wrap flex-col md:flex-row items-center bg-white mt-2 mb-10 w-9/12 mx-auto rounded-lg">
                <div class="flex flex-col xl:w-2/5 overflow-y-hidden lg:items-start pl-4">
                    <h1 class="text-xl text-black text-left mb-4">Pengolahan Citra Digital</h1>
                    <h1 class="text-sm text-blacktext-left">Wahyono, Ph.D</h1>
                    <p class="text-sm text-left">Universitas Gadjah Mada</p>
                </div>
                <div class="xl:w-3/5 overflow-y-hidden rounded-lg">
                    <img class="w-full rounded-lg" src="{{asset('img/logo.PNG')}}">
                </div>
            </div>
            <div class="container w-full">
                <div class="my-4 text-black text-xl font-bold mx-auto w-9/12">
                    <h1>Subject Matter :</h1>
                </div>

                <a href="#">
                   <div class="bg-white w-9/12 mx-auto px-4 py-4 my-6 rounded">
                       <h1 class="text-black text-base italic">Basics of Digital Image and their applications</h1>
                    </div> 
                </a>
                <a href="#">
                    <div class="bg-white w-9/12 mx-auto px-4 py-4 my-6 rounded">
                        <h1 class="text-black text-base italic">Pixel-Based Image Processing</h1>
                     </div> 
                 </a>
                 <a href="#">
                    <div class="bg-white w-9/12 mx-auto px-4 py-4 my-6 rounded">
                        <h1 class="text-black text-base italic">Image Enhancement using Filtering</h1>
                     </div> 
                 </a>
                 <a href="#">
                    <div class="bg-white w-9/12 mx-auto px-4 py-4 my-6 rounded">
                        <h1 class="text-black text-base italic">Morphological Processing and Feature Extraction</h1>
                     </div> 
                 </a>
            </div>
        </div>
@endsection
