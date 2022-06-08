<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Order.
 */
class Order extends AbstractEntity
{
    /**
     * Order Lines.
     *
     * @var array
     */
    protected $_lines;

    /**
     * External Reference.
     *
     * @var string
     */
    protected $_externalReference;

    /**
     * Order State.
     *
     * @var string
     */
    protected $_state;

    /**
     * Payment Gateway Identifier.
     *
     * @var string
     */
    protected $_paymentGatewayIdentifier;

    /**
     * Payment Tx Information.
     *
     * @var string
     */
    protected $_paymentTransactionInfo;

    /**
     * Customer Comment.
     *
     * @var string
     */
    protected $_customerComment;

    /**
     * Total Net Price.
     *
     * @var float
     */
    protected $_totalPriceNet;

    /**
     * Total Gross Price.
     *
     * @var float
     */
    protected $_totalPriceGross;

    /**
     * Total Tax Price.
     *
     * @var float
     */
    protected $_totalPriceTax;

    /**
     * Total Tax.
     *
     * @var float
     */
    protected $_totalTax;

    /**
     * Tax Code.
     *
     * @var string
     */
    protected $_taxCode;

    /**
     * Shipping Net Price.
     *
     * @var float
     */
    protected $_shippingPriceNet;

    /**
     * Shipping Gross Price.
     *
     * @var float
     */
    protected $_shippingPriceGross;

    /**
     * Shipping Tax.
     *
     * @var float
     */
    protected $_shippingTax;

    /**
     * Shipping Tax Code.
     *
     * @var string
     */
    protected $_shippingTaxCode;

    /**
     * Goods Net Price.
     *
     * @var float
     */
    protected $_goodsPriceNet;

    /**
     * Goods Gross Price.
     *
     * @var float
     */
    protected $_goodsPriceGross;

    /**
     * Goods Tax.
     *
     * @var float
     */
    protected $_goodsTax;

    /**
     * Goods Tax Code.
     *
     * @var string
     */
    protected $_goodsTaxCode;

    /**
     * Currency Code.
     *
     * @var string
     */
    protected $_currency;

    /**
     * Currency Units.
     *
     * @var string
     */
    protected $_currencyUnits;

    /**
     * Promotion Code.
     *
     * @var string
     */
    protected $_promotionCode;

    /**
     * Promotion Description.
     *
     * @var string
     */
    protected $_promotionDescription;

    /**
     * Order Source.
     *
     * @var string
     */
    protected $_source;

    /**
     * Delivery Address.
     *
     * @var DeliveryAddress
     */
    protected $_deliveryAddress;

    /**
     * Invoice Address.
     *
     * @var InvoiceAddress
     */
    protected $_invoiceAddress;

    /**
     * Shipment.
     *
     * @var Shipment
     */
    protected $_shipment;

    /**
     * Constructor.
     *
     * @param string|null $externalReference
     */
    public function __construct(string $externalReference = null)
    {
        $this->_externalReference = $externalReference;
        $this->_lines             = array();
    }

    /**
     * Returns the current report lines.
     *
     * @return array
     */
    public function getLines()
    {
        return $this->_lines;
    }

    /**
     * Adds a new line to the report.
     *
     * @param OrderLine $line
     *
     * @return Order
     */
    public function addLine(OrderLine $line)
    {
        $this->_lines[] = $line;

        return $this;
    }

    /**
     * External Reference Getter.
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->_externalReference;
    }

    /**
     * State Getter.
     *
     * @return string
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * Payment Gateway Indentifier Getter.
     *
     * @return string
     */
    public function getPaymentGatewayIdentifier()
    {
        return $this->_paymentGatewayIdentifier;
    }

    /**
     * Payment Transaction Info Getter.
     *
     * @return string
     */
    public function getPaymentTransactionInfo()
    {
        return $this->_paymentTransactionInfo;
    }

    /**
     * Customer Comment Getter.
     *
     * @return string
     */
    public function getCustomerComment()
    {
        return $this->_customerComment;
    }

    /**
     * Total Net Price Getter.
     *
     * @return float
     */
    public function getTotalPriceNet()
    {
        return $this->_totalPriceNet;
    }

    /**
     * Total Gross Price Getter.
     *
     * @return float
     */
    public function getTotalPriceGross()
    {
        return $this->_totalPriceGross;
    }

    /**
     * Total Tax Price Getter.
     *
     * @return float
     */
    public function getTotalPriceTax()
    {
        return $this->_totalPriceTax;
    }

    /**
     * Tax Total Getter.
     *
     * @return float
     */
    public function getTotalTax()
    {
        return $this->_totalTax;
    }

    /**
     * Tax Code Getter.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->_taxCode;
    }

    /**
     * Net Shipping Price Getter.
     *
     * @return float
     */
    public function getShippingPriceNet()
    {
        return $this->_shippingPriceNet;
    }

    /**
     * Gross Shipping Price Getter.
     *
     * @return float
     */
    public function getShippingPriceGross()
    {
        return $this->_shippingPriceGross;
    }

    /**
     * Shipping Tax Getter.
     *
     * @return float
     */
    public function getShippingTax()
    {
        return $this->_shippingTax;
    }

    /**
     * Shipping Tax Code Getter.
     *
     * @return string
     */
    public function getShippingTaxCode()
    {
        return $this->_shippingTaxCode;
    }

    /**
     * Goods Net Price Getter
     *
     * @return float
     */
    public function getGoodsPriceNet()
    {
        return $this->_goodsPriceNet;
    }

    /**
     * Goods Gross Price Getter.
     *
     * @return float
     */
    public function getGoodsPriceGross()
    {
        return $this->_goodsPriceGross;
    }

    /**
     * Goods Tax Getter.
     *
     * @return float
     */
    public function getGoodsTax()
    {
        return $this->_goodsTax;
    }

    /**
     * Goods Tax Code Getter.
     *
     * @return string
     */
    public function getGoodsTaxCode()
    {
        return $this->_goodsTaxCode;
    }

    /**
     * Currency Getter.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->_currency;
    }

    /**
     * Currency Units Getter.
     *
     * @return string
     */
    public function getCurrencyUnits()
    {
        return $this->_currencyUnits;
    }

    /**
     * Promotion Code Getter.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->_promotionCode;
    }

    /**
     * Promotion Description Getter.
     *
     * @return string
     */
    public function getPromotionDescription()
    {
        return $this->_promotionDescription;
    }

    /**
     * Source Getter.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->_source;
    }

    /**
     * Delivery Address Getter.
     *
     * @return DeliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->_deliveryAddress;
    }

    /**
     * Invoice Address Getter.
     *
     * @return InvoiceAddress
     */
    public function getInvoiceAddress()
    {
        return $this->_invoiceAddress;
    }

    /**
     * Shipment Getter.
     *
     * @return Shipment
     */
    public function getShipment()
    {
        return $this->_shipment;
    }

    /**
     * External Reference Setter.
     *
     * @param string $externalReference
     *
     * @return Order
     */
    public function setExternalReference(string $externalReference)
    {
        $this->_externalReference = $externalReference;

        return $this;
    }

    /**
     * State Setter.
     *
     * @param string $state
     *
     * @return Order
     */
    public function setState(string $state)
    {
        $this->_state = $state;

        return $this;
    }

    /**
     * Payment Gateway Identifier Setter.
     *
     * @param string $paymentGatewayIdentifier
     *
     * @return Order
     */
    public function setPaymentGatewayIdentifier(string $paymentGatewayIdentifier)
    {
        $this->_paymentGatewayIdentifier = $paymentGatewayIdentifier;

        return $this;
    }

    /**
     * Payment Transaction Info Setter.
     *
     * @param string $paymentTransactionInfo
     *
     * @return Order
     */
    public function setPaymentTransactionInfo(string $paymentTransactionInfo)
    {
        $this->_paymentTransactionInfo = $paymentTransactionInfo;

        return $this;
    }

    /**
     * Customer Comment Setter.
     *
     * @param string $customerComment
     *
     * @return Order
     */
    public function setCustomerComment(string $customerComment)
    {
        $this->_customerComment = $customerComment;

        return $this;
    }

    /**
     * Total Net Price Setter.
     *
     * @param float $totalPriceNet
     *
     * @return Order
     */
    public function setTotalPriceNet(float $totalPriceNet)
    {
        $this->_totalPriceNet = (float) $totalPriceNet;

        return $this;
    }

    /**
     * Total Gross Price Setter.
     *
     * @param float $totalPriceGross
     *
     * @return Order
     */
    public function setTotalPriceGross(float $totalPriceGross)
    {
        $this->_totalPriceGross = (float) $totalPriceGross;

        return $this;
    }

    /**
     * Total Tax Price Setter.
     *
     * @param float $totalPriceTax
     *
     * @return Order
     */
    public function setTotalPriceTax(float $totalPriceTax)
    {
        $this->_totalPriceTax = (float) $totalPriceTax;

        return $this;
    }

    /**
     * Total Tax Setter.
     *
     * @param float $totalTax
     *
     * @return Order
     */
    public function setTotalTax(float $totalTax)
    {
        $this->_totalTax = (float) $totalTax;

        return $this;
    }

    /**
     * Tax Code Setter.
     *
     * @param string $taxCode
     *
     * @return Order
     */
    public function setTaxCode(string $taxCode)
    {
        $this->_taxCode = (float) $taxCode;

        return $this;
    }

    /**
     * Shipping Net Price Setter.
     *
     * @param float $shippingPriceNet
     *
     * @return Order
     */
    public function setShippingPriceNet(float $shippingPriceNet)
    {
        $this->_shippingPriceNet = (float) $shippingPriceNet;

        return $this;
    }

    /**
     * Shipping Gross Price Setter.
     *
     * @param float $shippingPriceGross
     *
     * @return Order
     */
    public function setShippingPriceGross(float $shippingPriceGross)
    {
        $this->_shippingPriceGross = (float) $shippingPriceGross;

        return $this;
    }

    /**
     * Shipping Tax Setter.
     *
     * @param float $shippingTax
     *
     * @return Order
     */
    public function setShippingTax(float $shippingTax)
    {
        $this->_shippingTax = (float) $shippingTax;

        return $this;
    }

    /**
     * Shipping Tax Code Setter.
     *
     * @param string $shippingTaxCode
     *
     * @return Order
     */
    public function setShippingTaxCode(string $shippingTaxCode)
    {
        $this->_shippingTaxCode = $shippingTaxCode;

        return $this;
    }

    /**
     * Goods Net Price Setter.
     *
     * @param float $goodsPriceNet
     *
     * @return Order
     */
    public function setGoodsPriceNet(float $goodsPriceNet)
    {
        $this->_goodsPriceNet = (float) $goodsPriceNet;

        return $this;
    }

    /**
     * Goods Gross Price Getter.
     *
     * @param float $goodsPriceGross
     *
     * @return Order
     */
    public function setGoodsPriceGross(float $goodsPriceGross)
    {
        $this->_goodsPriceGross = (float) $goodsPriceGross;

        return $this;
    }

    /**
     * Goods Tax Setter.
     *
     * @param float $goodsTax
     *
     * @return Order
     */
    public function setGoodsTax(float $goodsTax)
    {
        $this->_goodsTax = (float) $goodsTax;

        return $this;
    }

    /**
     * Good Tax Code Setter.
     *
     * @param string $goodsTaxCode
     *
     * @return Order
     */
    public function setGoodsTaxCode(string $goodsTaxCode)
    {
        $this->_goodsTaxCode = $goodsTaxCode;

        return $this;
    }

    /**
     * Currency Setter.
     *
     * @param string $currency
     *
     * @return Order
     */
    public function setCurrency(string $currency)
    {
        $this->_currency = $currency;

        return $this;
    }

    /**
     * Currency Units Setter.
     *
     * @param string $currencyUnits
     *
     * @return Order
     */
    public function setCurrencyUnits(string $currencyUnits)
    {
        $this->_currencyUnits = $currencyUnits;

        return $this;
    }

    /**
     * Promotion Code Setter.
     *
     * @param string $promotionCode
     *
     * @return Order
     */
    public function setPromotionCode(string $promotionCode)
    {
        $this->_promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Promotion Description Setter.
     *
     * @param string $promotionDescription
     *
     * @return Order
     */
    public function setPromotionDescription(string $promotionDescription)
    {
        $this->_promotionDescription = $promotionDescription;

        return $this;
    }

    /**
     * Order Source Setter.
     *
     * @param string $source
     *
     * @return Order
     */
    public function setSource(string $source)
    {
        $this->_source = $source;

        return $this;
    }

    /**
     * Delivery Address Setter.
     *
     * @param DeliveryAddress $deliveryAddress
     *
     * @return Order
     */
    public function setDeliveryAddress(DeliveryAddress $deliveryAddress)
    {
        $this->_deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Invoice Address Setter.
     *
     * @param InvoiceAddress $invoiceAddress
     *
     * @return Order
     */
    public function setInvoiceAddress(InvoiceAddress $invoiceAddress)
    {
        $this->_invoiceAddress = $invoiceAddress;

        return $this;
    }

    /**
     * Shipment Setter.
     *
     * @param Shipment $shipment
     *
     * @return Order
     */
    public function setShipment(Shipment $shipment)
    {
        $this->_shipment = $shipment;

        $this->_shipment->setExternalReference($this->getExternalReference());

        return $this;
    }
}
