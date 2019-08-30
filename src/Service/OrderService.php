<?php

namespace SixBySix\RealtimeDespatch\Service;

use SixBySix\RealtimeDespatch\Entity\Order;
use SixBySix\RealtimeDespatch\Entity\OrderCollection;

/**
 * Order Service.
 */
class OrderService extends AbstractService
{
    /**
     * Notifies OrderFlow of a new order.
     *
     * @param string $orderId
     * @param string $altOrderId
     *
     * @return \SimpleXMLElement
     */
    public function notifyOrderCreation($orderId, $altOrderId = null)
    {
        $response = $this->_gateway->orderNotification($orderId, 'created', $altOrderId);

        if (strstr($response->__toString(), "Result 'no_operation' for order")) {
            throw new \Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Cancels a single order.
     *
     * @param \SixBySix\RealtimeDespatch\Entity\Order $order
     *
     * @return \SimpleXMLElement
     */
    public function cancelOrder(Order $order)
    {
        $response = $this->_gateway->cancelOrder($order->getExternalReference());

        if (strstr($response->__toString(), "No cancel operation performed")) {
            throw new \Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Retrieves the details for an order.
     *
     * @param \SixBySix\RealtimeDespatch\Entity\Order $order
     *
     * @return \SimpleXMLElement
     */
    public function retrieveOrderDetails(Order $order)
    {
        return $this->_gateway->retrieveOrderDetails($order->getExternalReference());
    }

    /**
     * Imports a single order.
     *
     * @param \SixBySix\RealtimeDespatch\Entity\Order $order
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
     */
    public function importOrder(Order $order)
    {
        $orders = new OrderCollection;
        $orders[] = $order;

        return $this->importOrders($orders);
    }

    /**
     * Imports a collection of orders.
     *
     * @param \SixBySix\RealtimeDespatch\Entity\OrderCollection $orders
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReport
     */
    public function importOrders(OrderCollection $orders)
    {
        $xml = $this->_getDocumentBuilder()->buildImportOrders(
            array('orders' => $orders)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importOrders($xml));
    }
}