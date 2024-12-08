<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;



class StripeController extends Controller
{
    

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $orderNum = time();

        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";


        // Order entry
        DB::table('orders')->insert([
            'order_number' => $orderNum,
            'total_ammount' => $totalprice,
            'payment_method' => 'stripe'
        ]);

        // Order Details entry
        foreach ($cart = session()->get('cart') as $key => $val){
            //dd($cart);

            DB::table('order_details')->insert([
                'order_number' => $orderNum,
                'book_id' => $key,
                'quantity' => $val['quantity'],
                'price' => $val['price']
            ]);
        }



        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('shopping.checkout'),
        ]);

        session()->forget('cart');
        return redirect()->away($session->url);
    }

    public function success()
    {
        return 'We have received your order.....';
        //return response('We have received your order.....', 200)->redirect('/home');

    }

    // public function productOrder(){
    //     $cart = session()->get('cart');

    //     echo $cart->name(['productname']);
    //     //dd($cart);

    //     //DB::table('orders');
    // }
}
