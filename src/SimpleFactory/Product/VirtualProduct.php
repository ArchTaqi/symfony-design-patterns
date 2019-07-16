<?php

namespace App\SimpleFactory\Product;


class VirtualProduct implements ProductInterface
{
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return 'I\'m Virtual product.';
    }
    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return '10$';
    }
}
