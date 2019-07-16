<?php

namespace App\ObserverPattern\Provider;

use App\ObserverPattern\Observer\ObserverInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class BookingProvider
 * @package App\ObserverPattern\Subject
 */
class BookingProvider implements ProviderInterface
{
    /**
     * Collection of entities or single entity
     * @var
     */
    protected $data;

    /**
     *
     * @var arrayCollection
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new ArrayCollection();
    }

    /**
     * Generate the notification
     * @param $data
     */
    public function generate($data) {
        $this->data = $data;
        $this->notify();
    }

    public function attach(ObserverInterface $observer)
    {
        $this->observers->add($observer);
    }

    public function detach(ObserverInterface $observer)
    {
        $this->observers->remove($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            if (!$observer instanceof ObserverInterface) {
                continue;
            }
            $observer->update($this->data);
        }
    }
}
