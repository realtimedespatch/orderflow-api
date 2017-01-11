<?php

namespace SixBySix\RealtimeDespatch\Document;

/**
 * Import Orders Doc Builder Type.
 */
class ImportOrdersDocBuilderType extends DocBuilderType
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->_doc  = new \DOMDocument('1.0', 'UTF-8');
        $this->_root = $this->_doc->appendChild($this->_doc->createElement('imports'));

        foreach ($this->_params['orders'] as $order) {
            $this->_buildImport($order);
        }

        return $this->_doc;
    }

    /**
     * Builds an individual import line.
     *
     * @param SixBySix\RealtimeDespatch\Entity\Order $order
     *
     * @return void
     */
    protected function _buildImport(\SixBySix\RealtimeDespatch\Entity\Order $order)
    {
        $import = $this->_root->appendChild($this->_doc->createElement('import'));

        $import->setAttribute('type', 'order');
        $import->setAttribute('operation', 'insert');
        $import->setAttribute('externalReference', $order->getExternalReference());

        $content  = "";
        $content .= $this->_buildParams($order->toArray(true));
        $content .= $this->_buildAddress($order->getDeliveryAddress(), 'delivery');
        $content .= $this->_buildAddress($order->getInvoiceAddress(), 'invoice');
        $content .= $this->_buildOrderLines($order->getLines());
        $content .= $this->_buildShipment($order->getShipment());

        $import->appendChild($import->ownerDocument->createCDATASection($content));
    }

    /**
     * Builds the order params.
     *
     * @param array $params
     *
     * @return string
     */
    protected function _buildParams(array $params)
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
     * @param SixBySix\RealtimeDespatch\Entity\Address $address
     * @param string                                   $type
     *
     * @return string
     */
    protected function _buildAddress(\SixBySix\RealtimeDespatch\Entity\Address $address, $type)
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
     * @param array $orderLines
     *
     * @return string
     */
    protected function _buildOrderLines(array $orderLines)
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
     * @param SixBySix\RealtimeDespatch\Entity\Shipment $address
     *
     * @return string
     */
    protected function _buildShipment(\SixBySix\RealtimeDespatch\Entity\Shipment $shipment)
    {
        $content = '';

        foreach ($shipment->toArray(true) as $key => $value) {
            $content .= 'shipment.'.$key."=".$value."\n";
        }

        return $content;
    }
}