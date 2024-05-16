<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public function getExpressCheckout()
    {
        $cart = app('cart');
        $total = $cart->session(auth()->id())->getTotal();

        $checkoutData = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $total
                    ]
                ]
            ],
            'application_context' => [
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel')
            ]
        ];

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->createOrder($checkoutData);

        if (isset($response['links'][1]['href'])) {
            return redirect($response['links'][1]['href']);
        }

        dd($response);  // Debug the response if something goes wrong
    }

    public function cancelPage()
    {
        dd('Payment has been canceled');
    }

    public function getExpressCheckoutSuccess(Request $request)
    {
        $cart = app('cart');
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        $cart->session(auth()->id())->clear();

        return redirect()->route('home')->with('success_message', 'Order has been placed successfully!');

//        dd($response);  // Debug the response if something goes wrong
    }
}
