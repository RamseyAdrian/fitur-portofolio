@extends('layouts.share')

@section('title', 'Detail Portofolio')

@section('content')
<div class="flex mt-12 border-b pb-5">
    <a href="{{ route('portofolio.experience') }}"
        class=" flex gap-2 px-2.5 py-2 text-md hover:bg-gray-200 rounded hover:font-medium" aria-current="page"><svg
            class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="Black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 12h14M5 12l4-4m-4 4 4 4" />
        </svg>
        Back to home</a>
</div>

<div class="mt-8 w-full max-w-3xl mx-auto">
    <h2 class="text-3xl font-bold max-w-3xl">Pengembangan App Simple Banking</h2>

    <div class="flex justify-between items-end mt-5">
        <p class="text-md">Academic : Project in Class</p>
    </div>

    <div class="mt-10">
        <img src="{{ url('images/d17.png') }}" class="w-full rounded-lg" alt="">
    </div>

    <div class="mt-10 mb-10">
        <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, numquam. Suscipit, libero
            aperiam rem praesentium officiis eius unde rerum, debitis ducimus cum quas a at, facere voluptatibus!
            Deserunt, suscipit ipsum!</p>
    </div>
</div>
@endsection