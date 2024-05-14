<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        // Get the cart instance for the current user session
        $cart = app('cart'); // This gets the cart instance from the Laravel service container

        // Add the product to the cart for the specific user
        $cart->session(auth()->id())->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ]);

        return redirect()->route('cart.index');
    }

    public function index()
    {
        return view('cart.index');
    }
}
