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

<section class="bg-white py-12 px-6 antialiased">
    <div class="mx-auto max-w-4xl">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Checkout</h2>

        <h3 class="text-lg font-medium text-gray-700 mb-4">Shipping Information</h3>

        <form action="{{ route('orders.store') }}" method="post" class="bg-white p-8 shadow-lg rounded-lg">
            @csrf

            <div class="grid grid-cols-1 gap-6">
                <!-- Full Name -->
                <div>
                    <label for="shipping_fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="shipping_fullname" id="shipping_fullname" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                </div>

                <!-- State -->
                <div>
                    <label for="shipping_state" class="block text-sm font-medium text-gray-700">State</label>
                    <input type="text" name="shipping_state" id="shipping_state" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                </div>

                <!-- City -->
                <div>
                    <label for="shipping_city" class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" name="shipping_city" id="shipping_city" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                </div>

                <!-- Zip Code -->
                <div>
                    <label for="shipping_zipcode" class="block text-sm font-medium text-gray-700">Zip</label>
                    <input type="text" name="shipping_zipcode" id="shipping_zipcode" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                </div>

                <!-- Full Address -->
                <div>
                    <label for="shipping_address" class="block text-sm font-medium text-gray-700">Full Address</label>
                    <input type="text" name="shipping_address" id="shipping_address" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                </div>

                <!-- Mobile -->
                <div>
                    <label for="shipping_phone" class="block text-sm font-medium text-gray-700">Mobile</label>
                    <input type="text" name="shipping_phone" id="shipping_phone" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                </div>

                <div>
                    <label for="cash_on_delivery" class="block text sm font-medium text-gray-700">Cash on Delivery</label>
                    <input type="radio" name="payment_method" id="" class="mt-1 block" value="cash_on_delivery">

                    <label for="pay_pal" class="block text sm font-medium text-gray-700">Pay Pal</label>
                    <input type="radio" name="payment_method" id="" class="mt-1 block" value="paypal">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="mt-4 w-full inline-flex justify-center py-3 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                        Place Order
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

@include('footer')

</body>

</html>


