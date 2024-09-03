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
     * @var \SixBySix\RealtimeDespatch\Entity\Product
     */
    protected \SixBySix\RealtimeDespatch\Entity\Product $_product;

    /**
     * Quantity.
     *
     * @var integer
     */
    protected int $_quantity;

    /**
     * Description.
     *
     * @var string
     */
    protected string $_description;

    /**
     * Net Total Price.
     *
     * @var float
     */
    protected float $_totalPriceNet;

    /**
     * Gross Total Price.
     *
     * @var float
     */
    protected float $_totalPriceGross;

    /**
     * Total Tax.
     *
     * @var float
     */
    protected float $_totalTax;

    /**
     * Description.
     *
     * @var string
     */
    protected string $_totalTaxCode;

    /**
     * Net Unit Price.
     *
     * @var float
     */
    protected float $_unitPriceNet;

    /**
     * Gross Unit Price.
     *
     * @var float
     */
    protected float $_unitPriceGross;

    /**
     * Unit Tax.
     *
     * @var float
     */
    protected float $_unitTax;

    /**
     * Unit Tax Code.
     *
     * @var string
     */
    protected string $_unitTaxCode;

    /**
     * Promotion Code.
     *
     * @var string
     */
    protected string $_promotionCode;

    /**
     * Promotion Price Description.
     *
     * @var string
     */
    protected string $_promotionPriceDescription;

    /**
     * Shipment Reference.
     *
     * @var string
     */
    protected string $_shipment = 'entity:shipment';

    /**
     * Product Getter.
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function getProduct(): \SixBySix\RealtimeDespatch\Entity\Product
    {
        return $this->_product;
    }

    /**
     * Product Reference Getter.
     *
     * @return string
     */
    public function getProductReference(): string
    {
        return $this->_product->getExternalReference();
    }

    /**
     * Quantity Getter.
     *
     * @return integer
     */
    public function getQuantity(): int
    {
        return $this->_quantity;
    }

    /**
     * Description Getter.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
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
     * Tax Total Getter.
     *
     * @return float
     */
    public function getTotalTax(): float
    {
        return $this->_totalTax;
    }

    /**
     * Total Tax Code Getter.
     *
     * @return string
     */
    public function getTotalTaxCode(): string
    {
        return $this->_totalTaxCode;
    }

    /**
     * Net Unit Price Getter.
     *
     * @return float
     */
    public function getUnitPriceNet(): float
    {
        return $this->_unitPriceNet;
    }

    /**
     * Gross Unit Price
     *
     * @return float
     */
    public function getUnitPriceGross(): float
    {
        return $this->_unitPriceGross;
    }

    /**
     * Unit Tax Getter.
     *
     * @return float
     */
    public function getUnitTax(): float
    {
        return $this->_unitTax;
    }

    /**
     * Unit Tax Code Getter.
     *
     * @return string
     */
    public function getUnitTaxCode(): string
    {
        return $this->_unitTaxCode;
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
     * Promotion Price Description Getter.
     *
     * @return string
     */
    public function getPromotionPriceDescription(): string
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
    public function setProduct(Product $product): OrderLine
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
    public function setQuantity(int $quantity): OrderLine
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
    public function setDescription(string $description): OrderLine
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
    public function setTotalPriceNet(float $totalPriceNet): OrderLine
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
    public function setTotalPriceGross(float $totalPriceGross): OrderLine
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
    public function setTotalTax(float $totalTax): OrderLine
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
    public function setTotalTaxCode(string $totalTaxCode): OrderLine
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
    public function setUnitPriceNet(float $unitPriceNet): OrderLine
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
    public function setUnitPriceGross(float $unitPriceGross): OrderLine
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
    public function setUnitTax(float $unitTax): OrderLine
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
    public function setUnitTaxCode(string $unitTaxCode): OrderLine
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
    public function setPromotionCode(string $promotionCode): OrderLine
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
    public function setPromotionPriceDescription(string $promotionPriceDescription): OrderLine
    {
        $this->_promotionPriceDescription = $promotionPriceDescription;

        return $this;
    }
}
