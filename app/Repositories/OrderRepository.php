<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;

class OrderRepository
{
    /**
     * @var Order
     */
    protected $order;

    /**
     * @var OrderProduct
     */
    protected $orderProduct;

    /**
     * OrderRepository constructor
     * 
     * @param Order $order
     * @param OrderProduct $orderProduct
     */
    public function __construct(Order $order, OrderProduct $orderProduct)
    {
        $this->order = $order;        
        $this->orderProduct = $orderProduct;
    }

    public function create(array $data) 
    {
        $order = $this->order->create([
            'user_id' => $data['user_id'],
            'address' => $data['address'],
            'city' => $data['city'],
            'zip_code' => $data['zipcode'],
            'phone_number' => $data['phonenumber'],
            'billing_total' => $data['billingTotal'],
            'billing_tax' => 0.15 * $data['billingTotal']
        ]);
        
        return $order;
    }

    public function persist(array $data)
    {
        $orderProduct = $this->orderProduct->create([
            'order_id' => $data['order_id'],
            'product_id' => $data['product_id'],
            'quantity' => $data['quantity']
        ]);

        return $orderProduct;
    }

    public function getHistory(User $user)
    {
        return $this->order->where('user_id', '=', $user['id'])
                        ->orderBy('created_at', 'desc')
                        ->with('products', 'user')
                        ->paginate(3);
    }
}