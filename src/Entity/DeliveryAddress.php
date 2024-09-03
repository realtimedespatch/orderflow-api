<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Delivery Address.
 */
class DeliveryAddress extends Address
{
    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return 'delivery';
    }
}