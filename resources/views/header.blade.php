<nav id="header" class="w-full z-30 top-0 py-1 bg-white">
    <div class="w-full container mx-auto flex items-center justify-between px-6 py-3">
        
        <!-- Logo -->
        <div class="flex items-center">
            <a href="#" class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                <img class="fill-current text-gray-800 mr-2" src="{{ asset('images/logoBlack.png') }}" alt="Your Logo" width="100" height="100">
            </a>
        </div>

        <!-- Menus -->
        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-center text-base text-gray-700 pt-4 md:pt-0">

                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Home</a></li>

                    <li class="group">
                        <a class="inline-block no-underline hover:text-black py-2 px-4" href="#">Shop</a>
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block">
                            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Categories</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">New Arrivals</a></li>
                            <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Featured Artisans</a></li>
                        </ul>
                    </li>

                    <li class="group">
                        <a class="inline-block no-underline hover:text-black py-2 px-4" href="#">Artisans</a>
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block">
                            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Meet the Artisans</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Become an Artisan</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

        <!-- Login and Register -->
        <div class="order-2 md:order-3 flex items-center" id="nav-content">
            @if (Route::has('login'))
                <div class="sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <circle fill="none" cx="12" cy="7" r="3" />
                                <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                            </svg>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- <a class="inline-block no-underline hover:text-black" href="#">
                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <circle fill="none" cx="12" cy="7" r="3" />
                    <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                </svg>
            </a> --}}

            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                    <circle cx="10.5" cy="18.5" r="1.5" />
                    <circle cx="17.5" cy="18.5" r="1.5" />
                </svg>
            </a>

        </div>
    </div>
</nav>
