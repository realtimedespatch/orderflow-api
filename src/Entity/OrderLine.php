<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Order Line.
 */
class OrderLine extends AbstractEntity
{
    /**
     * Product.
     *
     * @var SixBySix\RealtimeDespatch\Entity\Product
     */
    protected $_product;

    /**
     * Quantity.
     *
     * @var integer
     */
    protected $_quantity;

    /**
     * Description.
     *
     * @var string
     */
    protected $_description;

    /**
     * Net Total Price.
     *
     * @var float
     */
    protected $_totalPriceNet;

    /**
     * Gross Total Price.
     *
     * @var float
     */
    protected $_totalPriceGross;

    /**
     * Total Tax.
     *
     * @var float
     */
    protected $_totalTax;

    /**
     * Description.
     *
     * @var string
     */
    protected $_totalTaxCode;

    /**
     * Net Unit Price.
     *
     * @var float
     */
    protected $_unitPriceNet;

    /**
     * Gross Unit Price.
     *
     * @var float
     */
    protected $_unitPriceGross;

    /**
     * Unit Tax.
     *
     * @var float
     */
    protected $_unitTax;

    /**
     * Unit Tax Code.
     *
     * @var string
     */
    protected $_unitTaxCode;

    /**
     * Promotion Code.
     *
     * @var string
     */
    protected $_promotionCode;

    /**
     * Promotion Price Description.
     *
     * @var string
     */
    protected $_promotionPriceDescription;

    /**
     * Shipment Reference.
     *
     * @var string
     */
    protected $_shipment = 'entity:shipment';

    /**
     * Product Getter.
     *
     * @return SixBySix\RealtimeDespatch\Entity\Product
     */
    public function getProduct()
    {
        return $this->_product;
    }

    /**
     * Product Reference Getter.
     *
     * @return string
     */
    public function getProductReference()
    {
        return $this->_product->getExternalReference();
    }

    /**
     * Quantity Getter.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * Description Getter.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
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
     * Tax Total Getter.
     *
     * @return float
     */
    public function getTotalTax()
    {
        return $this->_totalTax;
    }

    /**
     * Total Tax Code Getter.
     *
     * @return string
     */
    public function getTotalTaxCode()
    {
        return $this->_totalTaxCode;
    }

    /**
     * Net Unit Price Getter.
     *
     * @return float
     */
    public function getUnitPriceNet()
    {
        return $this->_unitPriceNet;
    }

    /**
     * Gross Unit Price
     *
     * @return float
     */
    public function getUnitPriceGross()
    {
        return $this->_unitPriceGross;
    }

    /**
     * Unit Tax Getter.
     *
     * @return float
     */
    public function getUnitTax()
    {
        return $this->_unitTax;
    }

    /**
     * Unit Tax Code Getter.
     *
     * @return string
     */
    public function getUnitTaxCode()
    {
        return $this->_unitTaxCode;
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
     * Promotion Price Description Getter.
     *
     * @return string
     */
    public function getPromotionPriceDescription()
    {
        return $this->_promotionPriceDescription;
    }

    /**
     * Product Setter.
     *
     * @param Product $product
     *
     * @return OrderLine
     */
    public function setProduct(Product $product)
    {
        $this->_product = $product;

        return $this;
    }

    /**
     * Quantity Setter.
     *
     * @param integer $quantity
     *
     * @return OrderLine
     */
    public function setQuantity(int $quantity)
    {
        $this->_quantity = (integer) $quantity;

        return $this;
    }

    /**
     * Description Setter.
     *
     * @param string $description
     *
     * @return OrderLine
     */
    public function setDescription(string $description)
    {
        $this->_description = $description;

        return $this;
    }

    /**
     * Total Net Price Setter.
     *
     * @param float $totalPriceNet
     *
     * @return OrderLine
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
     * @return OrderLine
     */
    public function setTotalPriceGross(float $totalPriceGross)
    {
        $this->_totalPriceGross = (float) $totalPriceGross;

        return $this;
    }

    /**
     * Tax Total Price Setter.
     *
     * @param float $totalTax
     *
     * @return OrderLine
     */
    public function setTotalTax(float $totalTax)
    {
        $this->_totalTax = (float) $totalTax;

        return $this;
    }

    /**
     * Total Tax Code Setter.
     *
     * @param string $totalTaxCode
     *
     * @return OrderLine
     */
    public function setTotalTaxCode(string $totalTaxCode)
    {
        $this->_totalTaxCode = $totalTaxCode;

        return $this;
    }

    /**
     * Net Unit Price Setter.
     *
     * @param float $unitPriceNet
     *
     * @return OrderLine
     */
    public function setUnitPriceNet(float $unitPriceNet)
    {
        $this->_unitPriceNet = (float) $unitPriceNet;

        return $this;
    }

    /**
     * Gross Unit Price Setter.
     *
     * @param float $unitPriceGross
     *
     * @return OrderLine
     */
    public function setUnitPriceGross(float $unitPriceGross)
    {
        $this->_unitPriceGross = (float) $unitPriceGross;

        return $this;
    }

    /**
     * Unit Tax Setter.
     *
     * @param float $unitTax
     *
     * @return OrderLine
     */
    public function setUnitTax(float $unitTax)
    {
        $this->_unitTax = (float) $unitTax;

        return $this;
    }

    /**
     * Unit Tax Code Setter.
     *
     * @param string $unitTaxCode
     *
     * @return OrderLine
     */
    public function setUnitTaxCode(string $unitTaxCode)
    {
        $this->_unitTaxCode = $unitTaxCode;

        return $this;
    }

    /**
     * Promotion Code Setter.
     *
     * @param string $promotionCode
     *
     * @return OrderLine
     */
    public function setPromotionCode(string $promotionCode)
    {
        $this->_promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Promotion Price Description Setter.
     *
     * @param string $promotionPriceDescription
     *
     * @return OrderLine
     */
    public function setPromotionPriceDescription(string $promotionPriceDescription)
    {
        $this->_promotionPriceDescription = $promotionPriceDescription;

        return $this;
    }
}
