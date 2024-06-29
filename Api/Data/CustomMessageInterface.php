<?php

declare(strict_types=1);

namespace FP\CustomMessageQueue\Api\Data;

interface CustomMessageInterface
{
    /**
     * @param string $message
     * @return void
     */
    public function setMessage(string $message): void;

    /**
     * @return string
     */
    public function getMessage(): string;
}