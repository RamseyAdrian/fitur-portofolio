@extends('layouts.share')

@section('title', 'Share Portofolio')

@section('content')
<div class="mt-12 border-b pb-5">
    <div class="flex items-center justify-between">
        <a href="{{ route('about') }}"
            class=" flex gap-2 px-2.5 py-2 text-md hover:bg-gray-200 rounded hover:font-medium" aria-current="page"><svg
                class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="Black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
            </svg>
            Back to home</a>

        <div class="flex gap-5">
            <a href="{{ route('portofolio.share') }}"
                class="px-2.5 py-2 text-sm bg-blue-500 text-white font-medium rounded" aria-current="page">About</a>
            <a href="{{ route('portofolio.experience') }}"
                class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
                aria-current="page">Experience</a>
            <a href="{{ route('portofolio.achievement') }}"
                class="px-2.5 py-2 text-sm hover:bg-gray-200 hover:font-medium rounded"
                aria-current="page">Achievement</a>
            <a href="{{ route('portofolio.work') }}"
                class="px-2.5 py-2 text-sm hover:bg-gray-200 hover:font-medium rounded" aria-current="page">Work
                Experience</a>
        </div>
    </div>
</div>

<div class="mt-8">
    <h2 class="text-2xl font-bold mt-8 bg-blue-500 text-white rounded py-4 text-center">About Me</h2>

    <div class="flex mt-5 text-justify">
        <p class="text-md">Office ipsum you must be muted. At us follow centric including intersection eat
            more just. Our
            already points ui email another cause cadence. Time scope elephant also want running. Staircase
            after ipsum sorry unit great. Request corporate corporate alarming world churning. Giant
            incompetent
            low stakeholder my.Office ipsum you must be muted. At us follow centric including intersection
            eat
            more just. Our already points ui email another cause cadence. Time scope elephant also want
            running.
            Staircase after ipsum sorry unit great. Request corporate corporate alarming world churning.
            Giant
            incompetent low stakeholder my.
        </p>
    </div>
</div>
@endsection