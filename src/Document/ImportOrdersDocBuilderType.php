<?php

namespace SixBySix\RealtimeDespatch\Document;

use DOMDocument;
use SixBySix\RealtimeDespatch\Entity\Address;
use SixBySix\RealtimeDespatch\Entity\Order;
use SixBySix\RealtimeDespatch\Entity\OrderLine;
use SixBySix\RealtimeDespatch\Entity\Shipment;

/**
 * Import Orders Doc Builder Type.
 */
class ImportOrdersDocBuilderType extends DocBuilderType
{
    /**
     * {@inheritdoc}
     * @throws \DOMException
     */
    public function build(): DOMDocument
    {
        $this->_doc  = new DOMDocument('1.0', 'UTF-8');
        $this->_root = $this->_doc->appendChild($this->_doc->createElement('imports'));

        foreach ($this->_params['orders'] as $order) {
            $this->_buildImport($order);
        }

        return $this->_doc;
    }

    /**
     * Builds an individual import line.
     * @param Order $order
     * @return void
     * @throws \DOMException
     */
    protected function _buildImport(Order $order): void
    {
        $import = $this->_doc->createElement('import');
        $import->setAttribute('type', 'order');
        $import->setAttribute('operation', 'insert');
        $import->setAttribute('externalReference', $order->getExternalReference());
        $this->_root->appendChild($import);

        $content = $this->_buildParams($order->toArray(true));
        $content .= $this->_buildAddress($order->getDeliveryAddress(), 'delivery');
        $content .= $this->_buildAddress($order->getInvoiceAddress(), 'invoice');
        $content .= $this->_buildOrderLines($order->getLines());
        $content .= $this->_buildShipment($order->getShipment());

        $import->appendChild($import->ownerDocument->createCDATASection($content));
    }

    /**
     * Builds the order params.
     *
     * @param array<string,mixed> $params
     * @return string
     */
    protected function _buildParams(array $params): string
    {
        $content = '';

        foreach ($params as $key => $value) {
            if (is_array($value)) {
                continue;
            }

            $content .= $key."=".$value."\n";
        }

        return $content;
    }

    /**
     * Builds an order address
     *
     * @param Address $address
     * @param string $type
     * @return string
     */
    protected function _buildAddress(Address $address, string $type): string
    {
        $address->collapse();
        $content = '';

        foreach ($address->toArray(true) as $key => $value) {
            $content .= $type.ucfirst($key)."=".$value."\n";
        }

        return $content;
    }

    /**
     * Builds the order lines.
     *
     * @param array<int,OrderLine> $orderLines
     * @return string
     */
    protected function _buildOrderLines(array $orderLines): string
    {
        $content = '';

        foreach ($orderLines as $index => $line) {
            $lineIndex = $index + 1;
            $content  .= 'orderLine.'.$lineIndex.'.product.externalReference='.$line->getProductReference()."\n";

            foreach ($line->toArray(true) as $key => $value) {
                $content  .= 'orderLine.'.$lineIndex.'.'.$key."=".$value."\n";
            }
        }

        return $content;
    }

    /**
     * Builds an order address
     *
     * @param Shipment $shipment
     * @return string
     */
    protected function _buildShipment(Shipment $shipment): string
    {
        $content = '';

        foreach ($shipment->toArray(true) as $key => $value) {
            $content .= 'shipment.'.$key."=".$value."\n";
        }

        return $content;
    }
}
