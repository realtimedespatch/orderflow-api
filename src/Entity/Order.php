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
     * @var array<int,OrderLine>
     */
    protected array $_lines;

    /**
     * External Reference.
     *
     * @var string
     */
    protected string $_externalReference;

    /**
     * Order State.
     *
     * @var string
     */
    protected string $_state;

    /**
     * Payment Gateway Identifier.
     *
     * @var string
     */
    protected string $_paymentGatewayIdentifier;

    /**
     * Payment Tx Information.
     *
     * @var string
     */
    protected string $_paymentTransactionInfo;

    /**
     * Customer Comment.
     *
     * @var string
     */
    protected string $_customerComment;

    /**
     * Total Net Price.
     *
     * @var float
     */
    protected float $_totalPriceNet;

    /**
     * Total Gross Price.
     *
     * @var float
     */
    protected float $_totalPriceGross;

    /**
     * Total Tax Price.
     *
     * @var float
     */
    protected float $_totalPriceTax;

    /**
     * Total Tax.
     *
     * @var float
     */
    protected float $_totalTax;

    /**
     * Tax Code.
     *
     * @var string
     */
    protected string $_taxCode;

    /**
     * Shipping Net Price.
     *
     * @var float
     */
    protected float $_shippingPriceNet;


    /**
     * Shipping Gross Price.
     *
     * @var float
     */
    protected float $_shippingPriceGross;

    /**
     * Shipping Tax.
     *
     * @var float
     */
    protected float $_shippingTax;

    /**
     * Shipping Tax Code.
     *
     * @var string
     */
    protected string $_shippingTaxCode;

    /**
     * Goods Net Price.
     *
     * @var float
     */
    protected float $_goodsPriceNet;

    /**
     * Goods Gross Price.
     *
     * @var float
     */
    protected float $_goodsPriceGross;

    /**
     * Goods Tax.
     *
     * @var float
     */
    protected float $_goodsTax;

    /**
     * Goods Tax Code.
     *
     * @var string
     */
    protected string $_goodsTaxCode;

    /**
     * Currency Code.
     *
     * @var string
     */
    protected string $_currency;

    /**
     * Currency Units.
     *
     * @var string
     */
    protected string $_currencyUnits;

    /**
     * Promotion Code.
     *
     * @var string
     */
    protected string $_promotionCode;

    /**
     * Promotion Description.
     *
     * @var string
     */
    protected string $_promotionDescription;

    /**
     * Order Source.
     *
     * @var string
     */
    protected string $_source;

    /**
     * Delivery Address.
     *
     * @var DeliveryAddress
     */
    protected DeliveryAddress $_deliveryAddress;

    /**
     * Invoice Address.
     *
     * @var InvoiceAddress
     */
    protected InvoiceAddress $_invoiceAddress;

    /**
     * Shipment.
     *
     * @var Shipment
     */
    protected Shipment $_shipment;

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
     * @return array<int,OrderLine>
     */
    public function getLines(): array
    {
        return $this->_lines;
    }

    /**
     * Adds a new line to the report.
     * @param OrderLine $line
     * @return Order
     */
    public function addLine(OrderLine $line): Order
    {
        $this->_lines[] = $line;
        return $this;
    }

    /**
     * External Reference Getter.
     *
     * @return string
     */
    public function getExternalReference(): string
    {
        return $this->_externalReference;
    }

    /**
     * State Getter.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->_state;
    }

    /**
     * Payment Gateway Indentifier Getter.
     *
     * @return string
     */
    public function getPaymentGatewayIdentifier(): string
    {
        return $this->_paymentGatewayIdentifier;
    }

    /**
     * Payment Transaction Info Getter.
     *
     * @return string
     */
    public function getPaymentTransactionInfo(): string
    {
        return $this->_paymentTransactionInfo;
    }

    /**
     * Customer Comment Getter.
     *
     * @return string
     */
    public function getCustomerComment(): string
    {
        return $this->_customerComment;
    }

    /**
     * Total Net Price Getter.
     *
     * @return float
     */
    public function getTotalPriceNet(): float
    {
        return $this->_totalPriceNet;
    }

    /**
     * Total Gross Price Getter.
     *
     * @return float
     */
    public function getTotalPriceGross(): float
    {
        return $this->_totalPriceGross;
    }

    /**
     * Total Tax Price Getter.
     *
     * @return float
     */
    public function getTotalPriceTax(): float
    {
        return $this->_totalPriceTax;
    }

    /**
     * Tax Total Getter.
     *
     * @return float
     */
    public function getTotalTax(): float
    {
        return $this->_totalTax;
    }

    /**
     * Tax Code Getter.
     *
     * @return string
     */
    public function getTaxCode(): string
    {
        return $this->_taxCode;
    }

    /**
     * Net Shipping Price Getter.
     *
     * @return float
     */
    public function getShippingPriceNet(): float
    {
        return $this->_shippingPriceNet;
    }

    /**
     * Gross Shipping Price Getter.
     *
     * @return float
     */
    public function getShippingPriceGross(): float
    {
        return $this->_shippingPriceGross;
    }

    /**
     * Shipping Tax Getter.
     *
     * @return float
     */
    public function getShippingTax(): float
    {
        return $this->_shippingTax;
    }

    /**
     * Shipping Tax Code Getter.
     *
     * @return string
     */
    public function getShippingTaxCode(): string
    {
        return $this->_shippingTaxCode;
    }

    /**
     * Goods Net Price Getter
     *
     * @return float
     */
    public function getGoodsPriceNet(): float
    {
        return $this->_goodsPriceNet;
    }

    /**
     * Goods Gross Price Getter.
     *
     * @return float
     */
    public function getGoodsPriceGross(): float
    {
        return $this->_goodsPriceGross;
    }

    /**
     * Goods Tax Getter.
     *
     * @return float
     */
    public function getGoodsTax(): float
    {
        return $this->_goodsTax;
    }

    /**
     * Goods Tax Code Getter.
     * @return string
     */
    public function getGoodsTaxCode(): string
    {
        return $this->_goodsTaxCode;
    }

    /**
     * Currency Getter.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->_currency;
    }

    /**
     * Currency Units Getter.
     *
     * @return string
     */
    public function getCurrencyUnits(): string
    {
        return $this->_currencyUnits;
    }

    /**
     * Promotion Code Getter.
     *
     * @return string
     */
    public function getPromotionCode(): string
    {
        return $this->_promotionCode;
    }

    /**
     * Promotion Description Getter.
     *
     * @return string
     */
    public function getPromotionDescription(): string
    {
        return $this->_promotionDescription;
    }

    /**
     * Source Getter.
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->_source;
    }

    /**
     * Delivery Address Getter.
     *
     * @return DeliveryAddress
     */
    public function getDeliveryAddress(): DeliveryAddress
    {
        return $this->_deliveryAddress;
    }

    /**
     * Invoice Address Getter.
     *
     * @return InvoiceAddress
     */
    public function getInvoiceAddress(): InvoiceAddress
    {
        return $this->_invoiceAddress;
    }

    /**
     * Shipment Getter.
     *
     * @return Shipment
     */
    public function getShipment(): Shipment
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
    public function setExternalReference(string $externalReference): Order
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
    public function setState(string $state): Order
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
    public function setPaymentGatewayIdentifier(string $paymentGatewayIdentifier): Order
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
    public function setPaymentTransactionInfo(string $paymentTransactionInfo): Order
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
    public function setCustomerComment(string $customerComment): Order
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
    public function setTotalPriceNet(float $totalPriceNet): Order
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
    public function setTotalPriceGross(float $totalPriceGross): Order
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
    public function setTotalPriceTax(float $totalPriceTax): Order
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
    public function setTotalTax(float $totalTax): Order
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
    public function setTaxCode(string $taxCode): Order
    {
        $this->_taxCode = $taxCode;

        return $this;
    }

    /**
     * Shipping Net Price Setter.
     *
     * @param float $shippingPriceNet
     *
     * @return Order
     */
    public function setShippingPriceNet(float $shippingPriceNet): Order
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
    public function setShippingPriceGross(float $shippingPriceGross): Order
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
    public function setShippingTax(float $shippingTax): Order
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
    public function setShippingTaxCode(string $shippingTaxCode): Order
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
    public function setGoodsPriceNet(float $goodsPriceNet): Order
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
    public function setGoodsPriceGross(float $goodsPriceGross): Order
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
    public function setGoodsTax(float $goodsTax): Order
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
    public function setGoodsTaxCode(string $goodsTaxCode): Order
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
    public function setCurrency(string $currency): Order
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
    public function setCurrencyUnits(string $currencyUnits): Order
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
    public function setPromotionCode(string $promotionCode): Order
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
    public function setPromotionDescription(string $promotionDescription): Order
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
    public function setSource(string $source): Order
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
    public function setDeliveryAddress(DeliveryAddress $deliveryAddress): Order
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
    public function setInvoiceAddress(InvoiceAddress $invoiceAddress): Order
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
    public function setShipment(Shipment $shipment): Order
    {
        $this->_shipment = $shipment;

        $this->_shipment->setExternalReference($this->getExternalReference());

        return $this;
    }
}
