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

{{--{{ dd(Cart::session(auth()->id())->getContent()) }}--}}

<section class="bg-white py-8 antialiased dark:bg-white md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-center text-gray-900 dark:text-gray-900 sm:text-2xl">Shopping Cart</h2>

        <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
            <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                <div class="space-y-6">
                    <!-- Dynamic Block Start for Cart Items -->
                    @foreach($cartItems as $item)
                        <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-white md:p-6">
                            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                <!-- Product Name -->
                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                    <a href="#" class="text-base font-medium text-gray-900 hover:underline dark:text-gray-900">{{ $item->name }}</a>
                                </div>

                                <!-- Price -->
                                <div class="text-end md:order-4 md:w-32">
                                    <p class="text-base font-bold text-gray-900 dark:text-gray-900">
                                        ${{ Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
                                    </p>
                                </div>

                                <!-- Quantity Form -->
                                <div class="flex items-center justify-between md:order-3 md:justify-end">
                                    <form action="{{ route('cart.update', $item->id) }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- Ensure CSRF protection is enabled -->
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-20 border-2 border-gray-300 text-center text-sm font-medium text-gray-900 focus:outline-none dark:border-gray-600 dark:text-gray-900" required>
                                        <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700">
                                            Save
                                        </button>
                                    </form>
                                </div>

                                <!-- Delete Action -->
                                <div class="md:order-1">
                                    <a href="{{ route('cart.destroy', $item->id) }}" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-600">
                                        Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Dynamic Block End for Cart Items -->
                </div>
            </div>

            <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                <!-- Total Calculation -->
                <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-white sm:p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-900">Order summary</h3>
                    <div class="text-base font-bold text-gray-900 dark:text-gray-900">
                        <p>Total: ${{ Cart::session(auth()->id())->getTotal() }}</p>
                    </div>
                    <a href="{{route('cart.checkout')}}" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-black hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')

</body>

</html>


