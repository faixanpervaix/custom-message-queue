<?php

declare(strict_types=1);

namespace FP\CustomMessageQueue\Model;

use FP\CustomMessageQueue\Api\Data\CustomMessageInterface;

class CustomMessage implements CustomMessageInterface
{
    private readonly string $message;

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}