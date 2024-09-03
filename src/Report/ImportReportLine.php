<?php

namespace SixBySix\RealtimeDespatch\Report;

/**
 * Import Report Line.
 */
class ImportReportLine
{
    const RESULT_SUCCESS   = 'Success';
    const RESULT_DUPLICATE = 'Duplicate';
    const RESULT_FAILURE   = 'Failure';

    /**
     * External Reference.
     *
     * @var string
     */
    protected string $_externalReference;

    /**
     * Type.
     *
     * @var string
     */
    protected string $_type;

    /**
     * Operation.
     *
     * @var string
     */
    protected string $_operation;

    /**
     * Entity.
     *
     * @var string
     */
    protected string $_entity;

    /**
     * Entity.
     *
     * @var string
     */
    protected string $_item;

    /**
     * Import Query Timestamp.
     *
     * @var string
     */
    protected string $_queryTime;

    /**
     * Duplicate Message.
     *
     * @var string
     */
    protected string $_duplicateMessage;

    /**
     * Failure Message.
     *
     * @var string
     */
    protected string $_failureMessage;

    /**
     * Duplicate Detail.
     *
     * @var string
     */
    protected string $_duplicateDetail;

    /**
     * Failure Detail.
     *
     * @var string
     */
    protected string $_failureDetail;

    /**
     * Is Success?
     *
     * @var boolean
     */
    protected bool $_isSuccess;

    /**
     * Is Failure?
     *
     * @var boolean
     */
    protected bool $_isFailure;

    /**
     * Is Duplicate?
     *
     * @var boolean
     */
    protected bool $_isDuplicate;

    /**
     * Sets a parameter value.
     *
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    public function setParam(string $key, string $value): string
    {
        if (property_exists(get_class($this), '_'.$key)) {
            $this->{'_'.$key} = $value;
        }

        return $value;
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
     * @return ImportReportLine
     */
    public function setExternalReference(string $externalReference): ImportReportLine
    {
        $this->_externalReference = $externalReference;

        return $this;
    }

    /**
     * Type Getter.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->_type;
    }

    /**
     * Type Setter.
     *
     * @param string $type
     * @return void
     */
    public function setType(string $type): void
    {
        $this->_type = $type;
    }

    /**
     * Operation Getter.
     *
     * @return string
     */
    public function getOperation(): string
    {
        return $this->_operation;
    }

    /**
     * Operation Setter.
     *
     * @param string $operation
     * @return void
     */
    public function setOperation(string $operation): void
    {
        $this->_operation = $operation;
    }

    /**
     * Entity Getter.
     *
     * @return string
     */
    public function getEntity(): string
    {
        return $this->_entity;
    }

    /**
     * Entity Setter.
     *
     * @param string $entity
     * @return void
     */
    public function setEntity(string $entity): void
    {
        $this->_entity = $entity;
    }

    /**
     * Item Getter.
     *
     * @return string
     */
    public function getItem(): string
    {
        return $this->_item;
    }

    /**
     * Entity Setter.
     *
     * @param string $item
     * @return void
     */
    public function setItem(string $item): void
    {
        $this->_item = $item;
    }

    /**
     * Timestamp Getter.
     *
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->_queryTime;
    }

    /**
     * Timestamp Setter.
     *
     * @param string $timestamp
     *
     * @return void
     */
    public function setTimestamp(string $timestamp): void
    {
        $this->_queryTime = $timestamp;
    }

    /**
     * Message Getter.
     *
     * @return string
     */
    public function getMessage(): string
    {
        if ($this->_duplicateMessage) {
            return $this->_duplicateMessage;
        }

        if ($this->_failureMessage) {
            return $this->_failureMessage;
        }

        return 'Successfully Exported '.$this->getExternalReference();
    }

    /**
     *
     * @return string
     */
    public function getDetail(): string
    {
        if ($this->_duplicateDetail) {
            return $this->_duplicateDetail;
        }

        if ($this->_failureDetail) {
            return $this->_failureDetail;
        }

        return 'Successfully Exported '.$this->getExternalReference();
    }

    /**
     * Is this a successful import?
     *
     * @return boolean
     */
    public function isSuccess(): bool
    {
        return $this->_isSuccess;
    }

    /**
     * Is Success Setter.
     *
     * @param boolean $isSuccess
     * @return void
     */
    public function setIsSuccess(bool $isSuccess): void
    {
        $this->_isSuccess = $isSuccess;
    }

    /**
     * Is this a failed import?

     * @return boolean
     */
    public function isFailure(): bool
    {
        return $this->_isFailure;
    }

    /**
     * Is Failure Setter.
     *
     * @param boolean $isFailure
     * @return void
     */
    public function setIsFailure(bool $isFailure): void
    {
        $this->_isFailure = $isFailure;
    }

    /**
     * Is this a duplicate import?
     *
     * @return boolean
     */
    public function isDuplicate(): bool
    {
        return $this->_isDuplicate;
    }

    /**
     * Is Duplicate Setter.
     *
     * @param boolean $isDuplicate
     * @return void
     */
    public function setIsDuplicate(bool $isDuplicate): void
    {
        $this->_isDuplicate = $isDuplicate;
    }

    /**
     * Returns the result of the report line.
     *
     * @return string
     */
    public function getResult(): string
    {
        if ($this->isSuccess()) {
            return self::RESULT_SUCCESS;
        }

        if ($this->isDuplicate()) {
            return self::RESULT_DUPLICATE;
        }

        return self::RESULT_FAILURE;
    }
}
