<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class CartController extends Controller
{
    protected $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    public function index(Request $request)
    {
        $cart = $request->session()->get('cart');
        
        return view('cart')->with('cart', $cart);
    }

    public function add(Request $request)
    {
        $p = $this->product->findProduct($request->get('id'));
        $cart = $request->session()->get('cart');

        if (!$cart) {
            $cart = [
                $p->id => [
                    'name' => $p->name,
                    'price' => $p->price,
                    'quantity' => $request->get('qty'),
                    'totalPrice' => $p->price * $request->get('qty')
                ]
            ];

            $request->session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Successfully added to cart!'
            ]);
        }
        
        if (isset($cart[$p->id])) {
            $cart[$p->id]['quantity'] = $request->get('qty');

            $request->session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Successfully added to cart!'
            ]);
        }

        $cart[$p->id] = [
            'name' => $p->name,
            'price' => $p->price,
            'quantity' => $request->get('qty'),
            'totalPrice' => $p->price * $request->get('qty')
        ];

        $request->session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Successfully added to cart!'
        ]);
    }
}
