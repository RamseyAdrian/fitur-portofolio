<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>@yield('title')</title>
</head>

<body>
    @include('layouts.navbar')

    <div class="max-w-screen-xl mx-auto sm:p-6 md:p-6 xl:p-0 mb-12">
        <div class="flex justify-between mt-12 items-center border rounded-lg p-3 border-2">
            <div class="flex items-center gap-4">
                <img src="{{ url('images/36.png') }}" class="w-20 rounded" alt="">
                <div class="">
                    <h3 class="font-bold text-xl">Ilmansyah Muzaddin</h3>
                    <p class="text-medium text-gray-400">Ilmu Komputer</p>
                </div>
            </div>
            <a href="#" class="p-2.5 text-sm bg-brand-idle hover:bg-brand-hover rounded text-white font-medium"
                aria-current="page">Share
                Portfolio</a>
        </div>

        <div class="flex mt-12 border-b pb-5">
            <a href="{{ route('achievement') }}"
                class=" flex gap-2 px-2.5 py-2 text-md hover:bg-gray-200 rounded hover:font-medium"
                aria-current="page"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="Black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                Back to home</a>
        </div>

        <div class="mt-8">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>