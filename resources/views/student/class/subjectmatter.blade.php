@extends('layouts.class')

@section('maincontent')

<div class="flex flex-col container w-4/6 mx-auto my-4 py-8 px-16 border-4 border-gray-100">
    <h1 class="text-4xl font-bold mx-auto mb-12">Test</h1>
    <iframe class="mx-auto mb-16" width="720" height="405" src="https://www.youtube.com/embed/gGGPTskb7c8">
    </iframe>
    <div class="mx-auto" style="width: 720px;">
        <p class="text-xl">Lorem ipsum dolor sit amet</p>
    </div>
</div>

@endsection
