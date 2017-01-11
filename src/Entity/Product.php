<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Product.
 */
class Product extends AbstractEntity
{
    /**
     * External Reference.
     *
     * @var string
     */
    protected $_externalReference;

    /**
     * Description.
     *
     * @var string
     */
    protected $_description;

    /**
     * Barcode.
     *
     * @var string
     */
    protected $_barcode;

    /**
     * Image Reference.
     *
     * @var string
     */
    protected $_imageReference;

    /**
     * Weight.
     *
     * @var float
     */
    protected $_weight;

    /**
     * Weight Units.
     *
     * @var string
     */
    protected $_weightUnits;

    /**
     * Physical Store Types.
     *
     * @var string
     */
    protected $_physicalStorageTypes;

    /**
     * Category.
     *
     * @var string
     */
    protected $_category;

    /**
     * Price Net.
     *
     * @var float
     */
    protected $_priceNet;

    /**
     * Sellable.
     *
     * @var boolean
     */
    protected $_sellable;

    /**
     * Price Gross.
     *
     * @var float
     */
    protected $_priceGross;

    /**
     * Tax.
     *
     * @var float
     */
    protected $_tax;

    /**
     * Tax Code.
     *
     * @var string
     */
    protected $_taxCode;

    /**
     * Currency.
     *
     * @var string
     */
    protected $_currency;

    /**
     * Length.
     *
     * @var float
     */
    protected $_length;

    /**
     * Width.
     *
     * @var float
     */
    protected $_width;

    /**
     * Height.
     *
     * @var float
     */
    protected $_height;

    /**
     * Area.
     *
     * @var float
     */
    protected $_area;

    /**
     * Volume.
     *
     * @var float
     */
    protected $_volume;

    /**
     * Constructor.
     *
     * @param string $externalReference
     */
    public function __construct($externalReference = null)
    {
        $this->_externalReference = $externalReference;
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
     * External Reference Setter.
     *
     * @param string $externalReference
     *
     * @return \SixBySix\RealtimeDespatch\Entity\InventoryLine
     */
    public function setExternalReference($externalReference)
    {
        $this->_externalReference = $externalReference;

        return $this;
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
     * Description Setter.
     *
     * @param string $description
     *
     * @return \SixBySix\RealtimeDespatch\Entity\InventoryLine
     */
    public function setDescription($description)
    {
        $this->_description = $description;

        return $this;
    }

    /**
     * Barcode Getter.
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->_barcode;
    }

    /**
     * Image Reference Getter.
     *
     * @return string
     */
    public function getImageReference()
    {
        return $this->_imageReference;
    }

    /**
     * Weight Getter.
     *
     * @return float
     */
    public function getWeight()
    {
        return (float) $this->_weight;
    }

    /**
     * Unit Weights Getter.
     *
     * @return float
     */
    public function getWeightUnits()
    {
        return $this->_weightUnits;
    }

    /**
     * Physical Storage Types Getter.
     *
     * @return string
     */
    public function getPhysicalStorageTypes()
    {
        return $this->_physicalStorageTypes;
    }

    /**
     * Category Getter.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->_category;
    }

    /**
     * Net Price Getter.
     *
     * @return float
     */
    public function getPriceNet()
    {
        return (float) $this->_priceNet;
    }

    /**
     * Is Sellable?
     *
     * @return boolean
     */
    public function getSellable()
    {
        return (boolean) $this->_sellable;
    }

    /**
     * Gross Price Getter.
     *
     * @return float
     */
    public function getPriceGross()
    {
        return (float) $this->_priceGross;
    }

    /**
     * Tax Getter.
     *
     * @return float
     */
    public function getTax()
    {
        return (float) $this->_tax;
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
     * Currency Getter.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->_currency;
    }

    /**
     * Length Getter.
     *
     * @return float
     */
    public function getLength()
    {
        return (float) $this->_length;
    }

    /**
     * Width Getter.
     *
     * @return float
     */
    public function getWidth()
    {
        return (float) $this->_width;
    }

    /**
     * Height Getter.
     *
     * @return float
     */
    public function getHeight()
    {
        return (float) $this->_height;
    }

    /**
     * Area Getter.
     *
     * @return float
     */
    public function getArea()
    {
        return (float) $this->_area;
    }

    /**
     * Volume Getter.
     *
     * @return float
     */
    public function getVolume()
    {
        return (float) $this->_volume;
    }

    /**
     * Barcode Setter.
     *
     * @param string $barcode
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setBarcode($barcode)
    {
        $this->_barcode = $barcode;

        return $this;
    }

    /**
     * Image Reference Setter.
     *
     * @param string $imageReference
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setImageReference($imageReference)
    {
        $this->_imageReference = $imageReference;

        return $this;
    }

    /**
     * Net Price Setter.
     *
     * @param float $priceNet
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setWeight($weight)
    {
        $this->_weight = (float) $weight;

        return $this;
    }

    /**
     * Unit Weights Setter.
     *
     * @param string $weightUnits
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setWeightUnits($weightUnits)
    {
        $this->_weightUnits = $weightUnits;

        return $this;
    }

    /**
     * Physical Storage Types Setter.
     *
     * @param string $physicalStorageTypes
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setPhysicalStorageTypes($physicalStorageTypes)
    {
        $this->_physicalStorageTypes = $physicalStorageTypes;

        return $this;
    }

    /**
     * Category Setter.
     *
     * @param string $imageReference
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setCategory($category)
    {
        $this->_category = $category;

        return $this;
    }

    /**
     * Net Price Setter.
     *
     * @param float $priceNet
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setPriceNet($priceNet)
    {
        $this->_priceNet = (float) $priceNet;

        return $this;
    }

    /**
     * Sellable Setter.
     *
     * @param boolean $sellable
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setSellable($sellable)
    {
        $this->_sellable = (boolean) $sellable;

        return $this;
    }

    /**
     * Gross Price Setter.
     *
     * @param float $priceGross
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setPriceGross($priceGross)
    {
        $this->_priceGross = (float) $priceGross;

        return $this;
    }

    /**
     * Tax Setter.
     *
     * @param float $currency
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setTax($tax)
    {
        $this->_tax = (float) $tax;

        return $this;
    }

    /**
     * Tax Code Setter.
     *
     * @param string $taxCode
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setTaxCode($taxCode)
    {
        $this->_taxCode = $taxCode;

        return $this;
    }

    /**
     * Currency Setter.
     *
     * @param float $currency
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setCurrency($currency)
    {
        $this->_currency = (float) $currency;

        return $this;
    }

    /**
     * Length Setter.
     *
     * @param float $length
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setLength($length)
    {
        $this->_length = (float) $length;

        return $this;
    }

    /**
     * Width Setter.
     *
     * @param float $width
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setWidth($width)
    {
        $this->_width = (float) $width;

        return $this;
    }

    /**
     * Height Setter.
     *
     * @param float $height
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setHeight($height)
    {
        $this->_height = (float) $height;

        return $this;
    }

    /**
     * Area Setter.
     *
     * @param float $area
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setArea($area)
    {
        $this->_area = (float) $area;

        return $this;
    }

    /**
     * Volume Setter.
     *
     * @param float $volume
     *
     * @return \SixBySix\RealtimeDespatch\Entity\Product
     */
    public function setVolume($volume)
    {
        $this->_volume = (float) $volume;

        return $this;
    }
}