<?php


namespace App\FactoryMethod\Factory;


class NYPizzaStore extends PizzaStore
{
    protected function create(string $type) : PizzaInterface
    {
        switch ($type) {
            case 'chees': return new NYCheesPizza();
        }
    }
}
