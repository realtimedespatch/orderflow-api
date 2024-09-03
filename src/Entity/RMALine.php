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
    protected int $_quantity;

    /**
     * Return Reason..
     *
     * @var string
     */
    protected string $_reason;

    /**
     * Return Condition.
     *
     * @var string
     */
    protected string $_condition;

    /**
     * Return Product.
     *
     * @var string
     */
    protected string $_product;

    /**
     * Return Item.
     *
     * @var string
     */
    protected string $_returnItem = 'return';

    /**
     * Quantity Getter.
     *
     * @return int
     */
    public function getQuantity(): int
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
    public function setQuantity(int $quantity): RMALine
    {
        $this->_quantity = $quantity;

        return $this;
    }

    /**
     * Reason Getter.
     *
     * @return int
     */
    public function getReason(): int
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
    public function setReason(string $reason): RMALine
    {
        $this->_reason = $reason;

        return $this;
    }

    /**
     * Condition Getter.
     *
     * @return int
     */
    public function getCondition(): int
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
    public function setCondition(string $condition): RMALine
    {
        $this->_condition = $condition;

        return $this;
    }

    /**
     * Product Getter.
     *
     * @return int
     */
    public function getProduct(): int
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
    public function setProduct(string $product): RMALine
    {
        $this->_product = $product;

        return $this;
    }
}
