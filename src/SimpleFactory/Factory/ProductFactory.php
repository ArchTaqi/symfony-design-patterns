<?php

namespace App\SimpleFactory\Factory;

use App\SimpleFactory\Product\ProductInterface;
use App\SimpleFactory\Product\SimpleProduct;
use App\SimpleFactory\Product\VirtualProduct;

class ProductFactory
{
    /**
     * Create product.
     *
     * @param string $type
     * @return ProductInterface
     */
    public function create($type)
    {
        $product = null;
        switch ($type) {
            case 'simple':
                $product = new SimpleProduct();
                break;
            case 'virtual':
                $product = new VirtualProduct();
                break;
        }
        return $product;
    }
}
