<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>About Me</title>
</head>

<body>
    @include('layouts.navbar')
    <div class="max-w-screen-xl mx-auto">
        <div class="flex">
            <p>Ilmansyah Muzaddin</p>
            <p>Ilmu Komputer</p>
        </div>

        <div class="flex gap-5">
            <a href="#" class="" aria-current="page">About</a>
            <a href="#" class="" aria-current="page">Experience</a>
            <a href="{{ route('achievement') }}" class="" aria-current="page">Achievement</a>
            <a href="#" class="" aria-current="page">Work Experience</a>
        </div>

        <div>
            <div class="flex">
                <h2>Academic</h2>
                <div class="flex gap-5">
                    <a href="#" class="" aria-current="page">Index</a>
                    <a href="#" class="" aria-current="page">Draft</a>
                    <a href="#" class="" aria-current="page">New Achievement</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>