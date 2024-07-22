@extends('layouts.content-detail')

@section('title', 'Detail Achievement')

@section('content')
<div class="w-full max-w-3xl mx-auto">
    <h2 class="text-3xl font-bold max-w-3xl">Kualifikasi Jurnal Terbaik IEEE-2022</h2>

    <div class="flex justify-between items-end mt-10">
        <p class="text-md">Academic : Academic Awards</p>

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
    </div>

    <div class="mt-10">
        <img src="{{ url('images/d10.png') }}" class="w-full rounded-lg" alt="">
    </div>

    <div class="mt-10 mb-10">
        <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, numquam. Suscipit, libero
            aperiam rem praesentium officiis eius unde rerum, debitis ducimus cum quas a at, facere voluptatibus!
            Deserunt, suscipit ipsum!</p>
    </div>

    {{-- <a href="{{ route('achievement') }}" class="px-2.5 py-2 text-sm bg-blue-500 text-white font-medium rounded"
        aria-current="page">Kembali</a> --}}
</div>
@endsection