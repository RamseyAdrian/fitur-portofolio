@extends('layouts.content')

@section('title', 'Work Experience')

@section('content')
<div class="flex gap-5 mt-12 border-b pb-5">
    <a href="{{ route('about') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
        aria-current="page">About</a>
    <a href="{{ route('experience') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
        aria-current="page">Experience</a>
    <a href="{{ route('achievement') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 hover:font-medium rounded"
        aria-current="page">Achievement</a>
    <a href="{{ route('work-experience') }}" class="px-2.5 py-2 text-sm bg-blue-500 text-white font-medium rounded"
        aria-current="page">Work
        Experience</a>
</div>

<div class="mt-8">
    <div class="flex gap-3">
        <a href="#" class="px-2.5 py-2 bg-blue-500 text-sm text-white font-medium rounded flex items-center gap-2"
            aria-current="page">Index<img src="{{ url('images/hamburger-icon.png') }}" class="w-4 h-4" alt=""></a>
        <a href="{{ route('work-experience.add') }}"
            class="px-2.5 py-2 rounded border text-sm hover:bg-gray-200 rounded hover:font-medium flex items-center gap-2"
            aria-current="page">New work experience<img src="{{ url('images/plus-icon.png') }}" class="w-4 h-4"
                alt=""></a>
    </div>

    <h2 class="text-2xl font-bold mt-8 bg-blue-500 text-white rounded py-4 text-center">Work Experience</h2>

    <div class="flex mt-8 grid gap-8 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2">
        <div class="max-w-full bg-white rounded-lg mt-3">
            <a href="{{ route('work-experience.detail') }}">
                <img class="rounded-lg" src="{{ url('/images/d7.png') }}" alt="" />
            </a>
            <div class="mt-5">
                <p class="p-1 bg-blue-500 text-white rounded text-sm font-medium max-w-32 text-center mb-2">
                    Kerja Praktik</p>
                <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                        Rancang Bangun Sistem Data Nestle</h5>
                </a>
                <div class="flex items-end justify-between">
                    <p class="text-sm">August 2022</p>
                    <a href="#"
                        class="mt-2 inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-full bg-white rounded-lg mt-3">
            <a href="#">
                <img class="rounded-lg" src="{{ url('/images/d16.png') }}" alt="" />
            </a>
            <div class="mt-5">
                <p class="p-1 bg-blue-500 text-white rounded text-sm font-medium max-w-32 text-center mb-2">
                    Academic
                    Awards</p>
                <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                        Kualifikasi
                        Jurnal Terbaik IEEE-2022</h5>
                </a>
                <div class="flex items-end justify-between">
                    <p class="text-sm">May 2022</p>
                    <a href="#"
                        class="mt-2 inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-full bg-white rounded-lg mt-3">
            <a href="#">
                <img class="rounded-lg" src="{{ url('/images/d14.png') }}" alt="" />
            </a>
            <div class="mt-5">
                <p class="p-1 bg-blue-500 text-white rounded text-sm font-medium max-w-32 text-center mb-2">
                    Academic
                    Awards</p>
                <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                        Kualifikasi
                        Jurnal Terbaik IEEE-2022</h5>
                </a>
                <div class="flex items-end justify-between">
                    <p class="text-sm">May 2022</p>
                    <a href="#"
                        class="mt-2 inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-full bg-white rounded-lg mt-3">
            <a href="#">
                <img class="rounded-lg" src="{{ url('/images/d15.png') }}" alt="" />
            </a>
            <div class="mt-5">
                <p class="p-1 bg-blue-500 text-white rounded text-sm font-medium max-w-32 text-center mb-2">
                    Academic
                    Awards</p>
                <a href="#">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                        Kualifikasi
                        Jurnal Terbaik IEEE-2022</h5>
                </a>
                <div class="flex items-end justify-between">
                    <p class="text-sm">May 2022</p>
                    <a href="#"
                        class="mt-2 inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection