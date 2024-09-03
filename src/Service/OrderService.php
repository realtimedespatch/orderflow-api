<?php

namespace SixBySix\RealtimeDespatch\Service;

use Exception;
use SimpleXMLElement;
use SixBySix\RealtimeDespatch\Entity\Order;
use SixBySix\RealtimeDespatch\Entity\OrderCollection;
use SixBySix\RealtimeDespatch\Report\ImportReport;

/**
 * Order Service.
 */
class OrderService extends AbstractService
{
    /**
     * Notifies OrderFlow of a new order.
     *
     * @param string $orderId
     * @param string|null $altOrderId
     *
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function notifyOrderCreation(string $orderId, string $altOrderId = null): SimpleXMLElement
    {
        $response = $this->_gateway->orderNotification($orderId, 'created', $altOrderId);

        if (str_contains($response->__toString(), "Result 'no_operation' for order")) {
            throw new Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Cancels a single order.
     *
     * @param Order $order
     * @return SimpleXMLElement
     * @throws Exception
     */
    public function cancelOrder(Order $order): SimpleXMLElement
    {
        $response = $this->_gateway->cancelOrder($order->getExternalReference());

        if (str_contains($response->__toString(), "No cancel operation performed")) {
            throw new Exception($response->__toString());
        }

        return $response;
    }

    /**
     * Retrieves the details for an order.
     *
     * @param Order $order
     * @return SimpleXMLElement
     */
    public function retrieveOrderDetails(Order $order): SimpleXMLElement
    {
        return $this->_gateway->retrieveOrderDetails($order->getExternalReference());
    }

    /**
     * Imports a single order.
     *
     * @param Order $order
     * @return ImportReport
     * @throws Exception
     */
    public function importOrder(Order $order): ImportReport
    {
        $orders = new OrderCollection;
        $orders[] = $order;

        return $this->importOrders($orders);
    }

    /**
     * Imports a collection of orders.
     *
     * @param OrderCollection $orders
     * @return ImportReport
     * @throws Exception
     */
    public function importOrders(OrderCollection $orders): ImportReport
    {
        $xml = (string) $this->_getDocumentBuilder()->buildImportOrders(
            array('orders' => $orders)
        )->saveXml();

        return $this->_createImportReport($this->_gateway->importOrders($xml));
    }
}
