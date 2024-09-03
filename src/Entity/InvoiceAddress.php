<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Invoice Address.
 */
class InvoiceAddress extends Address
{
    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return 'invoice';
    }
}