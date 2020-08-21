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

    /**
     * Retrieve a single product
     */
    public function findProduct(int $id)
    {
        $product = Product::findOrFail($id);

        return $product;
    }

    /** 
     * Retrieve all products
     */
    public function getProducts(int $perPage) 
    {
        $products = Product::paginate($perPage);
        
        return $products;
    }
}