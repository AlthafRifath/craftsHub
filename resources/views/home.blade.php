<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>craftsHub</title>
    <meta name="description" content="Artisan Marketplace">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/alpinejs" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/LogoWhite.png') }}">

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    @include('header')

    @if(session('success_message'))
        <div class="rounded-md bg-green-50 p-4 mb-4">
            <div class="flex items-center justify-center">
                <div class="flex-shrink-0">
                    <!-- Success Icon -->
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-10.707a1 1 0 00-1.414-1.414L9 9.586 7.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800 text-center">
                        {{ session('success_message') }}
                    </p>
                </div>
            </div>
        </div>
    @elseif(session('error_message'))
        <div class="rounded-md bg-red-50 p-4 mb-4">
            <div class="flex items-center justify-center">
                <div class="flex-shrink-0">
                    <!-- Error Icon -->
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-9-3a1 1 0 112 0v4a1 1 0 11-2 0V7zm0 6a1 1 0 110-2 1 1 0 010 2z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-red-800 text-center">
                        {{ session('error_message') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    {{--    Slider Section--}}
    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="hidden carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('{{asset('images/Slider/1.png')}}');">

                    {{-- <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div> --}}

                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="hidden carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('{{asset('images/Slider/2.png')}}');">

                    {{-- <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div> --}}

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="hidden carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('{{asset('images/Slider/3.png')}}');">

                    {{-- <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Brown and blue hardbound book</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                        </div>
                    </div> --}}

                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>
    <br>

{{--    Features Section--}}
    <section>
        <div class="bg-transparent text-gray-400 text-xs font-sans box-border p-0 m-0 mx-auto block clear-both w-full md:w-[1188px] mt-6 pt-0">
            <div class="p-0">
              <ul class="list-none m-0 p-0 flex justify-between">
                <li class="flex items-center">
                  <span class="inline-block">
                    <img src="//icms-image.slatic.net/images/ims-web/55c642f0-250b-4515-9c8a-42cce3327098.png" alt="">
                  </span>
                  <a href="#" class="text-gray-400 no-underline hover:no-underline ml-2">
                    Safe Payments
                  </a>
                </li>
                <li class="flex items-center">
                  <span class="inline-block">
                    <img src="//icms-image.slatic.net/images/ims-web/1b7e5ccb-89fc-4383-bc27-4586e82195be.png" alt="">
                  </span>
                  <a href="#" class="text-gray-400 no-underline hover:no-underline ml-2">
                    Nationwide Delivery
                  </a>
                </li>
                <li class="flex items-center">
                  <span class="inline-block">
                    <img src="//icms-image.slatic.net/images/ims-web/f2a7f550-3a25-478d-9879-e6aa419c7ebf.png" alt="">
                  </span>
                  <a href="#" class="text-gray-400 no-underline hover:no-underline ml-2">
                    Free & Easy Returns
                  </a>
                </li>
                <li class="flex items-center">
                  <span class="inline-block">
                    <img src="//icms-image.slatic.net/images/ims-web/05352646-9b19-4283-a7b1-dcb16736663e.png" alt="">
                  </span>
                  <a href="#" class="text-gray-400 no-underline hover:no-underline ml-2">
                    Best Price Guaranteed
                  </a>
                </li>
                <li class="flex items-center">
                  <span class="inline-block">
                    <img src="//icms-image.slatic.net/images/ims-web/781b5194-65f0-4ae5-b7a6-003bc717054f.png" alt="">
                  </span>
                  <a href="#" class="text-gray-400 no-underline hover:no-underline ml-2">
                    100% Authentic Products
                  </a>
                </li>
                {{-- <li class="flex items-center">
                  <span class="inline-block">
                    <img src="{{ asset('images/logo24px.png') }}" alt="">
                  </span>
                  <a href="#" class="text-gray-400 no-underline hover:no-underline ml-2">
                    craftsHub Verified
                  </a>
                </li> --}}
              </ul>
            </div>
          </div>
    </section>

{{--    Product Categories--}}
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <nav id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">Categories</a>

                <div class="flex items-center" id="store-nav-content">
                    <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                        </svg>
                    </a>
                    <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                        </svg>
                    </a>
                </div>

          </div>
        </nav>
        <!-- Product Category 1 -->
        <div class="w-full md:w-1/3 xl:w-1/6 p-6 flex flex-col transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
        <a href="#" class="no-underline hover:no-underline">
            <img class="hover:shadow-lg" src="{{asset('images/ProductCategories/Jewelry.png')}}" alt="Product Category 1">
            <div class="pt-3 flex items-center justify-between">
            <p class="text-gray-900">Jewelry Making</p>
            <!-- Icon or badge here -->
            </div>
            {{-- <p class="pt-1 text-gray-600">Explore Crafts</p> --}}
        </a>
        </div>

        <!-- Product Category 2 -->
        <div class="w-full md:w-1/3 xl:w-1/6 p-6 flex flex-col transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
        <a href="#" class="no-underline hover:no-underline">
            <img class="hover:shadow-lg" src="{{asset('images/ProductCategories/Glassbowling.png')}}" alt="Product Category 2">
            <div class="pt-3 flex items-center justify-between">
            <p class="text-gray-900">Glassblowing</p>
            <!-- Icon or badge here -->
            </div>
            {{-- <p class="pt-1 text-gray-600">Discover Jewelry</p> --}}
        </a>
        </div>

        <!-- Product Category 3 -->
        <div class="w-full md:w-1/3 xl:w-1/6 p-6 flex flex-col transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
        <a href="#" class="no-underline hover:no-underline">
            <img class="hover:shadow-lg" src="{{asset('images/ProductCategories/Gourmet.png')}}" alt="Product Category 3">
            <div class="pt-3 flex items-center justify-between">
            <p class="text-gray-900">Gourmet Food and Beverages</p>
            <!-- Icon or badge here -->
            </div>
            {{-- <p class="pt-1 text-gray-600">Fine Home Decor</p> --}}
        </a>
        </div>

        <!-- Product Category 4 -->
        <div class="w-full md:w-1/3 xl:w-1/6 p-6 flex flex-col transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
            <a href="#" class="no-underline hover:no-underline">
            <img class="hover:shadow-lg" src="{{asset('images/ProductCategories/Ceramics.png')}}" alt="Product Category 4">
            <div class="pt-3 flex items-center justify-between">
                <p class="text-gray-900">Ceramics and Pottery</p>
                <!-- Icon or badge here -->
            </div>
            {{-- <p class="pt-1 text-gray-600">Fine Home Decor</p> --}}
            </a>
        </div>

        <!-- Product Category 5 -->
        <div class="w-full md:w-1/3 xl:w-1/6 p-6 flex flex-col transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
            <a href="#" class="no-underline hover:no-underline">
            <img class="hover:shadow-lg" src="{{asset('images/ProductCategories/Textiles.png')}}" alt="Product Category 5">
            <div class="pt-3 flex items-center justify-between">
                <p class="text-gray-900">Textiles</p>
                <!-- Icon or badge here -->
            </div>
            {{-- <p class="pt-1 text-gray-600">Fine Home Decor</p> --}}
            </a>
        </div>

        <!-- Product Category 6 -->
        <div class="w-full md:w-1/3 xl:w-1/6 p-6 flex flex-col transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
            <a href="#" class="no-underline hover:no-underline">
            <img class="hover:shadow-lg" src="{{asset('images/ProductCategories/Woodwork.png')}}" alt="Product Category 6">
            <div class="pt-3 flex items-center justify-between">
                <p class="text-gray-900">Woodworking and Carpentry</p>
                <!-- Icon or badge here -->
            </div>
            {{-- <p class="pt-1 text-gray-600">Fine Home Decor</p> --}}
            </a>
        </div>
    </div>

{{--    Featured Products--}}
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">Featured Products</a>

                    <div class="flex items-center" id="store-nav-content">
                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>
                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            @foreach($products as $product)
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src="{{ asset('storage/' . str_replace('\\', '/', $product->image)) }}">
                    <div class="pt-3 flex-col items-start justify-between">
                        <p class="text-xl font-semibold">{{$product->name}}</p>
                        <p class="text-sm text-gray-600 mt-1">{{ strip_tags($product->description) }}</p>
                        <p class="pt-1 text-gray-900 text-lg">රු {{$product->price}}</p>
                    </div>
                    <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{route('cart.add', $product->id)}}"> Add to Cart</a>
                    </button>
                </div>
            @endforeach
        </div>

    </section>

{{--    About Us--}}
    <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">

            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">About</a>
            <br>
            <br>
            <p class="mb-8">
                LocalCrafts Hub is a dynamic mobile application and online marketplace that passionately connects local artisans and crafters with enthusiasts and customers who value creativity and originality. At the heart of our mission lies a commitment to community engagement and the promotion of sustainable commerce.

                We believe in the power of local craftsmanship and the unique stories behind each creation. By bringing these artisans to a wider audience, we aim to not only showcase their talents but also sustain the rich cultural heritage they represent.
                <br><br>
                Our platform is more than just a marketplace; it's a comprehensive ecosystem equipped with a Customer Relationship Management (CRM) system. This system streamlines the management of customer and vendor interactions, orders, and a diverse range of product offerings. It ensures a seamless and efficient experience for both artisans and their customers.

                Join us at LocalCrafts Hub, where each purchase is a step towards nurturing the local craft community and preserving the artistry and skills that make each piece unique.</p>

        </div>

    </section>

    @include('footer')

</body>

</html>

