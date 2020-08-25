<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    protected $order;

    public function __construct(OrderRepository $order)
    {
        $this->order = $order;
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function create(Request $request)
    {
        $cart = $request->session()->get('cart');
        $total = 0;

        foreach ($cart as $c) {
            $total += $c['totalPrice'];
        }

        $order = $this->order->create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'zipcode' => $request->get('zipcode'),
            'phonenumber' => $request->get('phonenumber'),
            'billingTotal' => $total
        ]);

        foreach ($cart as $key => $item) {
            $this->order->persist([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => (int)$item['quantity'],
                'size' => $item['size']
            ]);
        }

        $request->session()->forget('cart');

        return redirect('/')->with('message', 'Order Successful! Expect our delivery guys shortly!');
    }

    public function history()
    {
        $user = auth()->user();
        $history = $this->order->getHistory($user);
    
        return view('history')->with('history', $history);
    }
}
