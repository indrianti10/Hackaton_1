<!-- Header Start -->
<header class="fixed top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/" class="font-bold text-lg text-primary block pt-6 lg:pt-2">
                <img src="/img/logo.png" width="150px" alt="Flowbite Logo" /></a>
            </div>
            <div class="flex items-center px-4 pt-2">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:opacity-100" >
                    <ul class="block lg:flex">
                        <li class="group">
                            
                            <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-base mx-8 lg:mx-0 text-dark py-2 flex group-hover:text-primary" type="button">Kota Pilihan <svg class="w-2.5 h-2.5 ms-3 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                                </button>
                                
                                <!-- Dropdown menu -->
                                <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jakarta</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semarang</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yogyakarta</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Makasar</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Medan</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bandung</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Surabaya</a>
                                    </li>
                                    </ul>
                                </div>
    
                        </li>
                        <li class="group">
                            <a href="/beli" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beli</a>
                        </li>
                        <li class="group">
                            <a href="/tentang_kami" class="text-base  text-dark py-2 mx-8  flex group-hover:text-primary">Tentang Kami</a>
                        </li>
                        <li class="group">
                            <a href="/asuransi" class="text-base  text-dark py-2 mx-8 flex group-hover:text-primary">Asuransi</a>
                        </li>
                    @auth
                        <div class="flex  items-center ml-16 mt-2 lg:mt-0  text-primary hover:opacity-30">
                            <button type="button" class="text-base mr-[70px] lg:mr-0 inline-flex " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom"> 
                                <span class="sr-only"></span>
                                <p class="-indent-40 ml-24">Welcome, {{ auth()->user()->name }}</p>
                                <div class="ml-2 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                    </svg>
                            </button>
                        </div>

                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-[#EDF2F4] divide-y divide-gray-300 rounded-lg shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 ">{{ auth()->user()->name }}</span>
                                <span class="block text-sm text-gray-500 truncate">{{ auth()->user()->email }}</span>
                            </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    @if(auth()->user()->Admin())
                                    <li>
                                        <a href="/dashboard" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Dashboard</a>
                                    </li>
                                    @endif
                                </ul>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="drop block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                        @endauth

                        {{-- Button login --}}
                        @guest
                        <ul class="group ml-8 lg:ml-32 ">
                            <a href="/login">
                            <button type="button" class="flex text-center items-center px-2 py-2 text-xs text-red-400 bg-white hover:bg-red-400 rounded-md border-2 border-red-400 hover:bg-red hover:text-white focus:z-10 focus:ring-2 focus:ring-red-400 focus:text-red-400"> Daftar / Login </button></a>
                        </ul>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->