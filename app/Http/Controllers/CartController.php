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
        // Get the cart instance for the current user session
        $cart = app('cart'); // This gets the cart instance from the Laravel service container

        // Get the items in the cart
        $cartItems = $cart->session(auth()->id())->getContent();

        return view('cart.index', ['cartItems' => $cartItems]);
    }

    public function update($itemId)
    {
        // Get the cart instance for the current user session
        $cart = app('cart'); // This gets the cart instance from the Laravel service container

        // Update the item in the cart
        $cart->session(auth()->id())->update($itemId, [
            'quantity'  => [
                'relative' => false,
                'value' => request('quantity')
            ]
        ]);

        return redirect()->route('cart.index');
    }

    public function destroy($itemId)
    {
        // Get the cart instance for the current user session
        $cart = app('cart'); // This gets the cart instance from the Laravel service container

        // Remove the item in the cart
        $cart->session(auth()->id())->remove($itemId);

        return redirect()->route('cart.index');
    }
}
