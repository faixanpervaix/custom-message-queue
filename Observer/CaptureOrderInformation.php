<?php

declare(strict_types= 1);

namespace FP\CustomMessageQueue\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use FP\CustomMessageQueue\Api\Data\CustomMessageInterface;

class CaptureOrderInformation implements ObserverInterface
{
    public function __construct(
        private readonly CustomMessageInterface $customMessage
    ) {
    }

    public function execute(Observer $observer): void
    {
        $order = $observer->getEvent()->getOrder();
        if ($order->getId()) {
            $data = [
                'order_id' => $order->getId(),
            ];
            $this->customMessage->setMessage(json_encode($data));
        }
    }
}