<?php


namespace App\FactoryMethod\Factory;

use App\FactoryMethod\Product\KyivCheesPizza;
use App\FactoryMethod\Product\PizzaInterface;

class KyivPizzaStore extends PizzaStore
{
    protected function create(string $type) : PizzaInterface
    {
        switch ($type) {
            case 'chees': return new KyivCheesPizza();
        }
    }
}
