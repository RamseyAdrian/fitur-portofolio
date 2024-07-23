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
                class="px-2.5 py-2 text-sm hover:bg-gray-200 hover:font-medium rounded" aria-current="page">About</a>
            <a href="{{ route('portofolio.experience') }}"
                class="px-2.5 py-2 text-sm hover:bg-gray-200 hover:font-medium rounded"
                aria-current="page">Experience</a>
            <a href="{{ route('portofolio.achievement') }}"
                class="px-2.5 py-2 text-sm hover:bg-gray-200 hover:font-medium rounded"
                aria-current="page">Achievement</a>
            <a href="{{ route('portofolio.work') }}"
                class="px-2.5 py-2 text-sm bg-blue-500 text-white font-medium rounded" aria-current="page">Work
                Experience</a>
        </div>
    </div>
</div>

<div class="mt-8">
    <label for="attribute" class="block mb-5 text-sm font-medium text-gray-900 dark:text-white">Category</label>
    <div class="flex gap-5 justify-between">
        <select id="attribute"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Select work experience category</option>
        </select>
        <a href="#"
            class="px-2.5 py-2 text-sm bg-red-500 hover:bg-red-700 text-white font-medium rounded w-full max-w-36 inline-flex items-center justify-center"
            aria-current="page">Filter</a>
    </div>

</div>

<div class="mt-8">
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