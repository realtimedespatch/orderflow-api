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
     * @return string
     */
    public function getQuantity()
    {
        return (integer) $this->_quantity;
    }

    /**
     * Quantity Setter.
     *
     * @param integer $quantity
     *
     * @return \SixBySix\RealtimeDespatch\Entity\RMALine
     */
    public function setQuantity($quantity)
    {
        $this->_quantity = $quantity;

        return $this;
    }

    /**
     * Reason Getter.
     *
     * @return string
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
     * @return \SixBySix\RealtimeDespatch\Entity\RMALine
     */
    public function setReason($reason)
    {
        $this->_reason = $reason;

        return $this;
    }

    /**
     * Condition Getter.
     *
     * @return string
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
     * @return \SixBySix\RealtimeDespatch\Entity\RMALine
     */
    public function setCondition($condition)
    {
        $this->_condition = $condition;

        return $this;
    }

    /**
     * Product Getter.
     *
     * @return string
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
     * @return \SixBySix\RealtimeDespatch\Entity\RMALine
     */
    public function setProduct($product)
    {
        $this->_product = $product;

        return $this;
    }
}