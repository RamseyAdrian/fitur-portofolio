<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>About Me</title>
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

        <div class="flex gap-5 mt-12 border-b pb-5">
            <a href="#" class="px-2.5 py-2 text-sm bg-blue-500 text-white font-medium rounded"
                aria-current="page">About</a>
            <a href="{{ route('experience') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
                aria-current="page">Experience</a>
            <a href="{{ route('achievement') }}" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium"
                aria-current="page">Achievement</a>
            <a href="#" class="px-2.5 py-2 text-sm hover:bg-gray-200 rounded hover:font-medium" aria-current="page">Work
                Experience</a>
        </div>

        <h2 class="text-2xl font-bold mt-8 bg-blue-500 text-white rounded py-4 text-center">About Me</h2>
        <div class="mt-8">
            <div class="">
                <div class="flex gap-3">
                    <a href="#"
                        class="px-2.5 py-2 bg-blue-500 text-sm text-white font-medium rounded flex items-center gap-2"
                        aria-current="page">Edit<img src="{{ url('images/create.png') }}" class="w-4 h-4" alt=""></a>
                    <a href="#"
                        class="px-2.5 py-2 bg-blue-500 text-sm text-white font-medium rounded flex items-center gap-2"
                        aria-current="page">Delete<img src="{{ url('images/Delete.png') }}" class="w-4 h-4" alt=""></a>
                    <a href="#"
                        class="px-2.5 py-2 bg-blue-500 text-sm text-white font-medium rounded flex items-center gap-2"
                        aria-current="page">Share<img src="{{ url('images/Forward.png') }}" class="w-4 h-4" alt=""></a>
                    <a href="#"
                        class="px-2.5 py-2 bg-blue-500 text-sm text-white font-medium rounded flex items-center gap-2"
                        aria-current="page">Unpublish<img src="{{ url('images/CrossMark.png') }}" class="w-4 h-4"
                            alt=""></a>
                </div>

                <div class="flex mt-8 text-justify">
                    Office ipsum you must be muted. At us follow centric including intersection eat more just. Our
                    already points ui email another cause cadence. Time scope elephant also want running. Staircase
                    after ipsum sorry unit great. Request corporate corporate alarming world churning. Giant incompetent
                    low stakeholder my.Office ipsum you must be muted. At us follow centric including intersection eat
                    more just. Our already points ui email another cause cadence. Time scope elephant also want running.
                    Staircase after ipsum sorry unit great. Request corporate corporate alarming world churning. Giant
                    incompetent low stakeholder my.
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>