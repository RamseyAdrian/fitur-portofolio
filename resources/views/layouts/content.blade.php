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

        <div class="mt-8">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>