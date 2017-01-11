<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Shipment Address.
 */
class ShipmentAddress extends Address
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'shipment';
    }
}