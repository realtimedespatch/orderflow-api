<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * RMA Line.
 */
class RMALine extends AbstractEntity
{
    /**
     * Return Quantity.
     *
     * @var integer
     */
    protected $_quantity;

    /**
     * Return Reason..
     *
     * @var string
     */
    protected $_reason;

    /**
     * Return Condition.
     *
     * @var string
     */
    protected $_condition;

    /**
     * Return Product.
     *
     * @var string
     */
    protected $_product;

    /**
     * Return Item.
     *
     * @var string
     */
    protected $_returnItem = 'return';

    /**
     * Quantity Getter.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /**
     * Quantity Setter.
     *
     * @param integer $quantity
     *
     * @return RMALine
     */
    public function setQuantity(int $quantity)
    {
        $this->_quantity = $quantity;

        return $this;
    }

    /**
     * Reason Getter.
     *
     * @return int
     */
    public function getReason()
    {
        return (integer) $this->_reason;
    }

    /**
     * Reason Setter.
     *
     * @param string $reason
     *
     * @return RMALine
     */
    public function setReason(string $reason)
    {
        $this->_reason = $reason;

        return $this;
    }

    /**
     * Condition Getter.
     *
     * @return int
     */
    public function getCondition()
    {
        return (integer) $this->_condition;
    }

    /**
     * Condition Setter.
     *
     * @param string $condition
     *
     * @return RMALine
     */
    public function setCondition(string $condition)
    {
        $this->_condition = $condition;

        return $this;
    }

    /**
     * Product Getter.
     *
     * @return int
     */
    public function getProduct()
    {
        return (integer) $this->_product;
    }

    /**
     * Product Setter.
     *
     * @param string $product
     *
     * @return RMALine
     */
    public function setProduct(string $product)
    {
        $this->_product = $product;

        return $this;
    }
}
