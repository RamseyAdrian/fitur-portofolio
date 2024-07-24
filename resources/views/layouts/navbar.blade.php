<nav class="bg-navbar border-gray-200 dark:bg-gray-900">
    <div class="w-full flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('/images/logoUp.png') }}" class="w-24 bg-white rounded" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <div class="flex gap-1">
                <p class="font-medium content-center text-white hidden sm:inline-flex sm:items-center md:hidden">Hai,
                    Ilmansyah</p>
                <p class="content-center text-white font-medium hidden xl:flex">Hai, Ilmansyah |</p>
                <a href="#" class="content-center text-navmenu-idle font-medium hidden xl:flex hover:text-navmenu-hover"
                    aria-current="page">Dashboard
                    |</a>
                <a href="#" class="content-center text-navmenu-idle hidden xl:flex hover:text-navmenu-hover font-medium"
                    aria-current="page">Sign
                    out</a>

                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="flex items-center pe-1 hidden lg:flex xl:hidden font-medium text-gray-900 rounded hover:text-blue-600 dark:hover:text-blue-500 md:me-0 dark:text-white"
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    Hai, Ilmansyah
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <a href="#"
                            class="text-red-500 hover:text-red-600 font-medium block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>

            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 bg-white rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-navbar dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 sm:text-white bg-blue-700 rounded md:bg-transparent md:text-white md:dark:text-blue-500"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 sm:text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-navmenu md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                        Kami</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 sm:text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-navmenu md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Info
                        Karir</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 sm:text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-navmenu md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 sm:text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-navmenu md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tracer
                        Study</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 sm:text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-navmenu md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Job
                        Fair</a>
                </li>
                <li>
                    <a href="#"
                        class="divide-y divide-gray-100 block py-2 px-3 md:p-0 sm:text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-navmenu md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Online
                        Learning</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 xl:hidden lg:hidden md:hidden md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class=" text-red-500 hover:text-red-600 block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 xl:hidden lg:hidden md:hidden md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Sign out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>