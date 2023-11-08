<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\Product;



class StripeController extends Controller
{
    public function checkout()
    {
            return view('checkout');
    }
    public function session(Request $request)
    {
            \Stripe\Stripe::setApiKey('sk_test_51OA4PeBz6IAt9QRBrfMNPRsoywF9zYsLZyzi93LEbIEp3yQsmGmbA0RMct6KtwVNakxCbZbBTZuYcqWaQZjcG2kN00fl7AWWSe');

            $product = $request->get('product');
            $price = $request->get('total');

            $session = \Stripe\Checkout\Session::create([
            
              'line_items' => [[
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        'name' => $product,
                    ],
                    'unit_amount' => $price, 
                ],
                'quantity' => 1,
                
                
                ],
            ],
              'mode' => 'payment',
              'success_url' => route('success'),
              'cancel_url' => route('checkout'),
            ]);

            return redirect()->away($session->url);
    }

    public function success()
    {
        
        return view('success');
    }
}

