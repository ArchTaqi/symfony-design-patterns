<?php

namespace App\FactoryMethod\Product;

interface PizzaInterface
{
    public function prepare();
    public function cook();
    public function cut();
    public function shipping();
}
