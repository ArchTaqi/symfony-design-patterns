<?php

namespace App\ObserverPattern\Observer;

/**
 * Interface ObserverInterface
 * @package App\ObserverPattern\Observer
 */
interface ObserverInterface
{
    public function update($data);
}
