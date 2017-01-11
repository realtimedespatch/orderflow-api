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
     * @return \SixBySix\RealtimeDespatch\Entity\Product
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
        return (integer) $this->_quantity;
    }

    /**
     * Description Getter.
     *
     * @return type
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
        return (float) $this->_totalPriceNet;
    }

    /**
     * Total Gross Price Getter.
     *
     * @return float
     */
    public function getTotalPriceGross()
    {
        return (float) $this->_totalPriceGross;
    }

    /**
     * Tax Total Getter.
     *
     * @return float
     */
    public function getTotalTax()
    {
        return (float) $this->_totalTax;
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
        return (float) $this->_unitPriceNet;
    }

    /**
     * Gross Unit Price
     *
     * @return float
     */
    public function getUnitPriceGross()
    {
        return (float) $this->_unitPriceGross;
    }

    /**
     * Unit Tax Getter.
     *
     * @return float
     */
    public function getUnitTax()
    {
        return (float) $this->_unitTax;
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
     * @param \SixBySix\RealtimeDespatch\Entity\Product $product
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setProduct($product)
    {
        $this->_product = $product;

        return $this;
    }

    /**
     * Quantity Setter.
     *
     * @param integer $quantity
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setQuantity($quantity)
    {
        $this->_quantity = (integer) $quantity;

        return $this;
    }

    /**
     * Description Setter.
     *
     * @param string $description
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setDescription($description)
    {
        $this->_description = $description;

        return $this;
    }

    /**
     * Total Net Price Setter.
     *
     * @param float $totalPriceNet
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setTotalPriceNet($totalPriceNet)
    {
        $this->_totalPriceNet = (float) $totalPriceNet;

        return $this;
    }

    /**
     * Total Gross Price Setter.
     *
     * @param float $totalPriceGross
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setTotalPriceGross($totalPriceGross)
    {
        $this->_totalPriceGross = (float) $totalPriceGross;

        return $this;
    }

    /**
     * Tax Total Price Setter.
     *
     * @param float $totalTax
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setTotalTax($totalTax)
    {
        $this->_totalTax = (float) $totalTax;

        return $this;
    }

    /**
     * Total Tax Code Setter.
     *
     * @param string $totalTaxCode
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setTotalTaxCode($totalTaxCode)
    {
        $this->_totalTaxCode = $totalTaxCode;

        return $this;
    }

    /**
     * Net Unit Price Setter.
     *
     * @param float $unitPriceNet
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setUnitPriceNet($unitPriceNet)
    {
        $this->_unitPriceNet = (float) $unitPriceNet;

        return $this;
    }

    /**
     * Gross Unit Price Setter.
     *
     * @param float $unitPriceGross
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setUnitPriceGross($unitPriceGross)
    {
        $this->_unitPriceGross = (float) $unitPriceGross;

        return $this;
    }

    /**
     * Unit Tax Setter.
     *
     * @param float $unitTax
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setUnitTax($unitTax)
    {
        $this->_unitTax = (float) $unitTax;

        return $this;
    }

    /**
     * Unit Tax Code Setter.
     *
     * @param string $unitTaxCode
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setUnitTaxCode($unitTaxCode)
    {
        $this->_unitTaxCode = $unitTaxCode;

        return $this;
    }

    /**
     * Promotion Code Setter.
     *
     * @param string $promotionCode
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setPromotionCode($promotionCode)
    {
        $this->_promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Promotion Price Description Setter.
     *
     * @param string $promotionPriceDescription
     *
     * @return \SixBySix\RealtimeDespatch\Entity\OrderLine
     */
    public function setPromotionPriceDescription($promotionPriceDescription)
    {
        $this->_promotionPriceDescription = $promotionPriceDescription;

        return $this;
    }
}