<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Inventory Line.
 */
class InventoryLine extends AbstractEntity
{
    /**
     * External Reference.
     *
     * @var string
     */
    protected string $_externalReference;

    /**
     * Site.
     *
     * @var string
     */
    protected string $_site;

    /**
     * Total allocated units.
     * @var int
     */
    protected int $_total;

    /**
     * Number of allocated units.
     * @var int
     */
    protected int $_allocated;

    /**
     * Is the item available?

     * @var bool
     */
    protected bool $_isAvailable;

    /**
     * Is the item frozen?
     * @var bool
     */
    protected bool $_isFrozen;

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
     * @return InventoryLine
     */
    public function setExternalReference(string $externalReference): InventoryLine
    {
        $this->_externalReference = $externalReference;

        return $this;
    }

    /**
     * Site Getter.
     *
     * @return string
     */
    public function getSite(): string
    {
        return $this->_site;
    }

    /**
     * Site Setter.
     *
     * @param string $site
     *
     * @return InventoryLine
     */
    public function setSite(string $site): InventoryLine
    {
        $this->_site = $site;

        return $this;
    }

    /**
     * Total Getter.
     *
     * @return integer
     */
    public function getTotal(): int
    {
        return (integer) $this->_total;
    }

    /**
     * Total Setter.
     *
     * @param integer $total
     *
     * @return InventoryLine
     */
    public function setTotal(int $total): InventoryLine
    {
        $this->_total = $total;

        return $this;
    }

    /**
     * Allocated Getter.
     *
     * @return integer
     */
    public function getAllocated(): int
    {
        return (integer) $this->_allocated;
    }

    /**
     * Allocated Getter.
     *
     * @param integer $allocated
     *
     * @return InventoryLine
     */
    public function setAllocated(int $allocated): InventoryLine
    {
        $this->_allocated = $allocated;

        return $this;
    }

    /**
     * Is Available Getter.
     *
     * @return boolean
     */
    public function isAvailable(): bool
    {
        return (boolean) $this->_isAvailable;
    }

    /**
     * Is Available Setter.
     *
     * @param boolean $isAvailable
     *
     * @return InventoryLine
     */
    public function setIsAvailable(bool $isAvailable): InventoryLine
    {
        $this->_isAvailable = (boolean) $isAvailable;

        return $this;
    }

    /**
     * Is Frozen Getter.
     *
     * @return boolean
     */
    public function isFrozen(): bool
    {
        return (boolean) $this->_isFrozen;
    }

    /**
     * Is Frozen Setter.
     *
     * @param boolean $isFrozen
     *
     * @return InventoryLine
     */
    public function setIsFrozen(bool $isFrozen): InventoryLine
    {
        $this->_isFrozen = (boolean) $isFrozen;

        return $this;
    }
}
