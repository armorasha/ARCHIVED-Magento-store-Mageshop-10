<?php

namespace SimplifiedMagento\FirstModule\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class OurObserver implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $message = $observer->getData('greeting');
        $message->setGreeting('Good Evening');
    }
}
