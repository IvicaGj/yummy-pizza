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
        $size = $request->get('size') ? $request->get('size') : 'Medium';
        $quantity = (int)$request->get('qty');
        $price = (int)$request->get('price');

        if (!$cart) {
            if ($quantity == 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please choose more than one item!'
                ]);
            }

            $cart[] = [
                'id' => $p->id,
                'name' => $p->name,
                'price' => $price,
                'quantity' => $quantity,
                'size' => $size,
                'totalPrice' => $price * $quantity
            ];

            $request->session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Successfully added to cart!'
            ]);

        } else {
            foreach ($cart as $k => &$c) {
                // item in cart
                if ((int)$request->get('id') == $c['id']) {

                    //item of same type but different size
                    if ($c['size'] != $size && $quantity != 0){
                        $cart[] = [
                            'id' => $p->id,
                            'name' => $p->name,
                            'price' => $price,
                            'quantity' => $quantity,
                            'size' => $size,
                            'totalPrice' => $price * $quantity
                        ];
                        $request->session()->put('cart', $cart);

                        return response()->json([
                            'success' => true,
                            'message' => 'Cart updated succesfully!!'
                        ]);
                    } 

                    //remove item from cart
                    if ($quantity == 0 && $c['size'] == $size) {
                        unset($cart[$k]);

                        $request->session()->put('cart', $cart);

                        return response()->json([
                            'success' => true,
                            'message' => 'Cart updated succesfully!!'
                        ]);
                    }
                    
                    //item of same type but different quantity
                    if ((int)$c['quantity'] != $quantity) {
                        $c['quantity'] = $quantity;

                        $request->session()->put('cart', $cart);

                        return response()->json([
                            'success' => true,
                            'message' => 'Cart updated succesfully!!'
                        ]);
                    } 
                } 
            }
        }
            
        if ($quantity == 0) {
            return response()->json([
                'success' => false,
                'message' => 'Please choose more than one item!'
            ]);
        }
        
        $cart[] = [
            'id' => $p->id,
            'name' => $p->name,
            'price' => $price,
            'quantity' => $quantity,
            'size' => $size,
            'totalPrice' => $price * $quantity
        ];

        $request->session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Cart updated succesfully!'
        ]);
    }
}
