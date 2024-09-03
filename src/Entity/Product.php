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
    protected string $_externalReference;

    /**
     * Description.
     *
     * @var string
     */
    protected string $_description;

    /**
     * Barcode.
     *
     * @var string
     */
    protected string $_barcode;

    /**
     * Image Reference.
     *
     * @var string
     */
    protected string $_imageReference;

    /**
     * Weight.
     *
     * @var float
     */
    protected float $_weight;

    /**
     * Weight Units.
     *
     * @var string
     */
    protected string $_weightUnits;

    /**
     * Physical Store Types.
     *
     * @var string
     */
    protected string $_physicalStorageTypes;

    /**
     * Category.
     *
     * @var string
     */
    protected string $_category;

    /**
     * Price Net.
     *
     * @var float
     */
    protected float $_priceNet;

    /**
     * Sellable.
     *
     * @var boolean
     */
    protected bool $_sellable;

    /**
     * Price Gross.
     *
     * @var float
     */
    protected float $_priceGross;

    /**
     * Tax.
     *
     * @var float
     */
    protected float $_tax;

    /**
     * Tax Code.
     *
     * @var string
     */
    protected string $_taxCode;

    /**
     * Currency.
     *
     * @var string
     */
    protected string $_currency;

    /**
     * Length.
     *
     * @var float
     */
    protected float $_length;

    /**
     * Width.
     *
     * @var float
     */
    protected float $_width;

    /**
     * Height.
     *
     * @var float
     */
    protected float $_height;

    /**
     * Area.
     *
     * @var float
     */
    protected float $_area;

    /**
     * Volume.
     *
     * @var float
     */
    protected float $_volume;

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
    public function getExternalReference(): string
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
    public function setExternalReference(string $externalReference): Product
    {
        $this->_externalReference = $externalReference;

        return $this;
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
     * Description Setter.
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription(string $description): Product
    {
        $this->_description = $description;

        return $this;
    }

    /**
     * Barcode Getter.
     *
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->_barcode;
    }

    /**
     * Image Reference Getter.
     *
     * @return string
     */
    public function getImageReference(): string
    {
        return $this->_imageReference;
    }

    /**
     * Weight Getter.
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->_weight;
    }

    /**
     * Unit Weights Getter.
     *
     * @return string
     */
    public function getWeightUnits(): string
    {
        return $this->_weightUnits;
    }

    /**
     * Physical Storage Types Getter.
     *
     * @return string
     */
    public function getPhysicalStorageTypes(): string
    {
        return $this->_physicalStorageTypes;
    }

    /**
     * Category Getter.
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this->_category;
    }

    /**
     * Net Price Getter.
     *
     * @return float
     */
    public function getPriceNet(): float
    {
        return $this->_priceNet;
    }

    /**
     * Is Sellable?
     *
     * @return boolean
     */
    public function getSellable(): bool
    {
        return $this->_sellable;
    }

    /**
     * Gross Price Getter.
     *
     * @return float
     */
    public function getPriceGross(): float
    {
        return $this->_priceGross;
    }

    /**
     * Tax Getter.
     *
     * @return float
     */
    public function getTax(): float
    {
        return $this->_tax;
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
     * Currency Getter.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->_currency;
    }

    /**
     * Length Getter.
     *
     * @return float
     */
    public function getLength(): float
    {
        return $this->_length;
    }

    /**
     * Width Getter.
     *
     * @return float
     */
    public function getWidth(): float
    {
        return $this->_width;
    }

    /**
     * Height Getter.
     *
     * @return float
     */
    public function getHeight(): float
    {
        return $this->_height;
    }

    /**
     * Area Getter.
     *
     * @return float
     */
    public function getArea(): float
    {
        return $this->_area;
    }

    /**
     * Volume Getter.
     *
     * @return float
     */
    public function getVolume(): float
    {
        return $this->_volume;
    }

    /**
     * Barcode Setter.
     *
     * @param string $barcode
     * @return Product
     */
    public function setBarcode(string $barcode): Product
    {
        $this->_barcode = $barcode;

        return $this;
    }

    /**
     * Image Reference Setter.
     *
     * @param string $imageReference
     * @return Product
     */
    public function setImageReference(string $imageReference): Product
    {
        $this->_imageReference = $imageReference;

        return $this;
    }

    /**
     * Net Price Setter.
     *
     * @param float $weight
     * @return Product
     */
    public function setWeight(float $weight): Product
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
    public function setWeightUnits(string $weightUnits): Product
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
    public function setPhysicalStorageTypes(string $physicalStorageTypes): Product
    {
        $this->_physicalStorageTypes = $physicalStorageTypes;

        return $this;
    }

    /**
     * Category Setter.
     *
     * @param string $category
     *
     * @return Product
     */
    public function setCategory(string $category): Product
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
    public function setPriceNet(float $priceNet): Product
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
    public function setSellable(bool $sellable): Product
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
    public function setPriceGross(float $priceGross): Product
    {
        $this->_priceGross = (float) $priceGross;

        return $this;
    }

    /**
     * Tax Setter.
     *
     * @param float $tax
     *
     * @return Product
     */
    public function setTax(float $tax): Product
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
    public function setTaxCode(string $taxCode): Product
    {
        $this->_taxCode = $taxCode;

        return $this;
    }

    /**
     * Currency Setter.
     *
     * @param string $currency
     * @return Product
     */
    public function setCurrency(string $currency): Product
    {
        $this->_currency = $currency;
        return $this;
    }

    /**
     * Length Setter.
     *
     * @param float $length
     *
     * @return Product
     */
    public function setLength(float $length): Product
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
    public function setWidth(float $width): Product
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
    public function setHeight(float $height): Product
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
    public function setArea(float $area): Product
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
    public function setVolume(float $volume): Product
    {
        $this->_volume = (float) $volume;

        return $this;
    }
}
