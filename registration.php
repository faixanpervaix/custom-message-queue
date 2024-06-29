<?php

declare(strict_types= 1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'FP_CustomMessageQueue',
    __DIR__
);