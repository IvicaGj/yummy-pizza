<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository
{
    /**
     * @var Order
     */
    protected $order;

    /**
     * OrderRepository constructor
     * 
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;        
    }
}