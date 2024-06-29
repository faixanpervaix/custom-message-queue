<?php

declare(strict_types= 1);

namespace FP\CustomMessageQueue\Model;

use FP\CustomMessageQueue\Api\Data\CustomMessageInterface;

class Consumer
{
    public function process(CustomMessageInterface $message): void
    {
    }
}