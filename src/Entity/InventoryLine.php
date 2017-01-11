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
    protected $_externalReference;

    /**
     * Site.
     *
     * @var string
     */
    protected $_site;

    /**
     * Total allocated units.
     *
     * @var string
     */
    protected $_total;

    /**
     * Number of allocated units.
     *
     * @var string
     */
    protected $_allocated;

    /**
     * Is the item available?
     *
     * @var string
     */
    protected $_isAvailable;

    /**
     * Is the item frozen?
     *
     * @var string
     */
    protected $_isFrozen;

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
     * Site Getter.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->_site;
    }

    /**
     * Site Setter.
     *
     * @param string $site
     *
     * @return \SixBySix\RealtimeDespatch\Entity\InventoryLine
     */
    public function setSite($site)
    {
        $this->_site = $site;

        return $this;
    }

    /**
     * Total Getter.
     *
     * @return integer
     */
    public function getTotal()
    {
        return (integer) $this->_total;
    }

    /**
     * Total Setter.
     *
     * @param integer $total
     *
     * @return \SixBySix\RealtimeDespatch\Entity\InventoryLine
     */
    public function setTotal($total)
    {
        $this->_total = $total;

        return $this;
    }

    /**
     * Allocated Getter.
     *
     * @return integer
     */
    public function getAllocated()
    {
        return (integer) $this->_allocated;
    }

    /**
     * Allocated Getter.
     *
     * @param integer $allocated
     *
     * @return \SixBySix\RealtimeDespatch\Entity\InventoryLine
     */
    public function setAllocated($allocated)
    {
        $this->_allocated = $allocated;

        return $this;
    }

    /**
     * Is Available Getter.
     *
     * @return boolean
     */
    public function isAvailable()
    {
        return (boolean) $this->_isAvailable;
    }

    /**
     * Is Available Setter.
     *
     * @param boolean $isAvailable
     *
     * @return \SixBySix\RealtimeDespatch\Entity\InventoryLine
     */
    public function setIsAvailable($isAvailable)
    {
        $this->_isAvailable = (boolean) $isAvailable;

        return $this;
    }

    /**
     * Is Frozen Getter.
     *
     * @return boolean
     */
    public function isFrozen()
    {
        return (boolean) $this->_isFrozen;
    }

    /**
     * Is Frozen Setter.
     *
     * @param boolean $isAvailable
     *
     * @return \SixBySix\RealtimeDespatch\Entity\InventoryLine
     */
    public function setIsFrozen($isFrozen)
    {
        $this->_isFrozen = (boolean) $isFrozen;

        return $this;
    }
}