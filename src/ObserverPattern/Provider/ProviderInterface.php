<?php

namespace App\ObserverPattern\Provider;

use App\ObserverPattern\Observer\ObserverInterface;

/**
 * All provider must implement this interface.
 * Interface ProviderInterface
 * @package App\ObserverPattern\Subject
 */
interface ProviderInterface
{

    /**
     * @param object $data
     * @return mixed
     */
    public function generate($data);

    /**
     * attach/register an Observer
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function attach(ObserverInterface $observer);

    /**
     * detach/remove an Observer
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function detach(ObserverInterface $observer);

    /**
     * @return mixed
     */
    public function notify();
}
