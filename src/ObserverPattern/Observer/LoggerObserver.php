<?php

namespace App\ObserverPattern\Observer;

use App\ObserverPattern\Provider\ProviderInterface;

class LoggerObserver implements ObserverInterface
{
    /**
     * Collection of entities or single entity
     * @var
     */
    protected $data;

    /**
     * LoggerObserver constructor.
     * @param ProviderInterface $subject
     */
    public function __construct(ProviderInterface $subject)
    {
        $subject->attach($this);
    }

    public function update($data){
        $this->data = $data;
        echo "Logger Observer --> update" . "\xA";
    }
}
