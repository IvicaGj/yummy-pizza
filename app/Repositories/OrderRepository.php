<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderProduct;
use Exception;

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
        try {
            $order = $this->order->create([
                'user_id' => $data['user_id'],
                'address' => $data['address'],
                'city' => $data['city'],
                'zip_code' => $data['zipcode'],
                'phone_number' => $data['phonenumber'],
                'billing_total' => $data['billingTotal'],
                'billing_tax' => 0.15 * $data['billingTotal']
            ]);
        } catch (Exception $e) {
            return false;
        }
        
        return $order;
    }

    public function persist(array $data)
    {
        try  {
            $orderProduct = $this->orderProduct->create([
                'order_id' => $data['order_id'],
                'product_id' => $data['product_id'],
                'quantity' => $data['quantity']
            ]);
        } catch (Exception $e) {
            return false;
        }

        return $orderProduct;
    }
}