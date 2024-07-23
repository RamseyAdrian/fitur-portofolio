@extends('layouts.content')

@section('title', 'About Me')

@section('content')
<div class="flex gap-5 mt-12 border-b pb-5">
    <a href="#" class="px-2.5 py-2 text-sm bg-blue-500 text-white font-medium rounded" aria-current="page">About</a>
    <a href="{{ route('experience') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
        aria-current="page">Experience</a>
    <a href="{{ route('achievement') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
        aria-current="page">Achievement</a>
    <a href="{{ route('work-experience') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
        aria-current="page">Work
        Experience</a>
</div>

<h2 class="text-2xl font-bold mt-8 bg-blue-500 text-white rounded py-4 text-center">About Me</h2>
<div class="mt-8">
    <div class="">
        <div class="flex gap-3">
            <a href="#"
                class="px-2.5 py-2 bg-brand-idle hover:bg-brand-hover text-sm text-white rounded flex items-center gap-2"
                aria-current="page"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                </svg>
                Edit</a>
            <a href="#"
                class="px-2.5 py-2 rounded bg-brand-idle text-white text-sm hover:bg-brand-hover rounded hover:font-medium flex items-center gap-2"
                aria-current="page"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                </svg>
                Delete</a>
            <a href="#"
                class="px-2.5 py-2 rounded bg-brand-idle text-white text-sm hover:bg-brand-hover rounded hover:font-medium flex items-center gap-2"
                aria-current="page"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-width="2"
                        d="M7.926 10.898 15 7.727m-7.074 5.39L15 16.29M8 12a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm12 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm0-11a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                </svg>
                Share</a>
            <a href="#"
                class="px-2.5 py-2 rounded bg-brand-idle text-white text-sm hover:bg-brand-hover rounded hover:font-medium flex items-center gap-2"
                aria-current="page"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>Unpublish</a>
        </div>

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
</div>
@endsection