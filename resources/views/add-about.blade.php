<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>Add About</title>
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

        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold mt-8">Personal Branding Video</h2>
            <h4 class="mt-8 text-red-600">*Tidak perlu diisi</h4>
        </div>

        <h4 class="mt-5">Upload Video</h4>

        <div class="flex items-center justify-center w-full mt-8">
            <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                            upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>

        <h2 class="text-3xl font-bold mt-8">About Me</h2>

        <h4 class="mt-5">Upload Display</h4>

        <div class="flex items-center justify-center w-full mt-8">
            <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                            upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>

        <h4 class="mt-5">Description</h4>

        <input type="text" id="default-input"
            class="mt-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Insert description about yourself">

        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold mt-8">SWOT</h2>
            <h4 class="mt-8 text-red-600">*Tidak perlu diisi</h4>
        </div>

        <img src="{{ url('images/swot.png') }}" alt="" class="w-100 h-100">

        <div class="flex justify-between items-center mt-8">
            <button type="button"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg px-8 py-3.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</button>
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg  px-8 py-3.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>