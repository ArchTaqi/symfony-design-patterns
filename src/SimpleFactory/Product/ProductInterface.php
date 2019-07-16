<?php

namespace App\SimpleFactory\Product;

interface ProductInterface
{
    /**
     * Get name.
     *
     * @return string
     */
    public function getName();
    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice();
}
