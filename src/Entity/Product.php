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
     * @param string|null $externalReference
     */
    public function __construct(string $externalReference = null)
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
     * @return Product
     */
    public function setExternalReference(string $externalReference)
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
     * @return Product
     */
    public function setDescription(string $description)
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
        return $this->_weight;
    }

    /**
     * Unit Weights Getter.
     *
     * @return string
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
        return $this->_priceNet;
    }

    /**
     * Is Sellable?
     *
     * @return boolean
     */
    public function getSellable()
    {
        return $this->_sellable;
    }

    /**
     * Gross Price Getter.
     *
     * @return float
     */
    public function getPriceGross()
    {
        return $this->_priceGross;
    }

    /**
     * Tax Getter.
     *
     * @return float
     */
    public function getTax()
    {
        return $this->_tax;
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
        return $this->_length;
    }

    /**
     * Width Getter.
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * Height Getter.
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Area Getter.
     *
     * @return float
     */
    public function getArea()
    {
        return $this->_area;
    }

    /**
     * Volume Getter.
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->_volume;
    }

    /**
     * Barcode Setter.
     *
     * @param string $barcode
     *
     * @return Product
     */
    public function setBarcode(string $barcode)
    {
        $this->_barcode = $barcode;

        return $this;
    }

    /**
     * Image Reference Setter.
     *
     * @param string $imageReference
     *
     * @return Product
     */
    public function setImageReference(string $imageReference)
    {
        $this->_imageReference = $imageReference;

        return $this;
    }

    /**
     * Net Price Setter.
     *
     * @param float $priceNet
     *
     * @return Product
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
     * @return Product
     */
    public function setWeightUnits(string $weightUnits)
    {
        $this->_weightUnits = $weightUnits;

        return $this;
    }

    /**
     * Physical Storage Types Setter.
     *
     * @param string $physicalStorageTypes
     *
     * @return Product
     */
    public function setPhysicalStorageTypes(string $physicalStorageTypes)
    {
        $this->_physicalStorageTypes = $physicalStorageTypes;

        return $this;
    }

    /**
     * Category Setter.
     *
     * @param string $imageReference
     *
     * @return Product
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
     * @return Product
     */
    public function setPriceNet(float $priceNet)
    {
        $this->_priceNet = (float) $priceNet;

        return $this;
    }

    /**
     * Sellable Setter.
     *
     * @param boolean $sellable
     *
     * @return Product
     */
    public function setSellable(bool $sellable)
    {
        $this->_sellable = (boolean) $sellable;

        return $this;
    }

    /**
     * Gross Price Setter.
     *
     * @param float $priceGross
     *
     * @return Product
     */
    public function setPriceGross(float $priceGross)
    {
        $this->_priceGross = (float) $priceGross;

        return $this;
    }

    /**
     * Tax Setter.
     *
     * @param float $currency
     *
     * @return Product
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
     * @return Product
     */
    public function setTaxCode(string $taxCode)
    {
        $this->_taxCode = $taxCode;

        return $this;
    }

    /**
     * Currency Setter.
     *
     * @param float $currency
     *
     * @return Product
     */
    public function setCurrency(float $currency)
    {
        $this->_currency = (float) $currency;

        return $this;
    }

    /**
     * Length Setter.
     *
     * @param float $length
     *
     * @return Product
     */
    public function setLength(float $length)
    {
        $this->_length = (float) $length;

        return $this;
    }

    /**
     * Width Setter.
     *
     * @param float $width
     *
     * @return Product
     */
    public function setWidth(float $width)
    {
        $this->_width = (float) $width;

        return $this;
    }

    /**
     * Height Setter.
     *
     * @param float $height
     *
     * @return Product
     */
    public function setHeight(float $height)
    {
        $this->_height = (float) $height;

        return $this;
    }

    /**
     * Area Setter.
     *
     * @param float $area
     *
     * @return Product
     */
    public function setArea(float $area)
    {
        $this->_area = (float) $area;

        return $this;
    }

    /**
     * Volume Setter.
     *
     * @param float $volume
     *
     * @return Product
     */
    public function setVolume(float $volume)
    {
        $this->_volume = (float) $volume;

        return $this;
    }
}
