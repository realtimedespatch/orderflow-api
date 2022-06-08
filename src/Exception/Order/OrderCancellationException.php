<?php

namespace SixBySix\RealtimeDespatch\Exception\Order;

use Exception;

/**
 * Order Cancellation Exception.
 */
class OrderCancellationException extends Exception
{
    const EXCEPTION_MISSING_ORDER_MSG = 'rtd.exceptions.MissingDataException';
}
