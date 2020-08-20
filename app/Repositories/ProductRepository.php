<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * ProductRepository constructor
     * 
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;        
    }

    public function getProducts(int $perPage) 
    {
        $products = Product::paginate($perPage);
        
        return $products;
    }
}