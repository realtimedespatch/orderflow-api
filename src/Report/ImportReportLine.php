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
    protected $_externalReference;

    /**
     * Type.
     *
     * @var string
     */
    protected $_type;

    /**
     * Operation.
     *
     * @var string
     */
    protected $_operation;

    /**
     * Entity.
     *
     * @var string
     */
    protected $_entity;

    /**
     * Entity.
     *
     * @var string
     */
    protected $_item;

    /**
     * Import Query Timestamp.
     *
     * @var string
     */
    protected $_queryTime;

    /**
     * Duplicate Message.
     *
     * @var string
     */
    protected $_duplicateMessage;

    /**
     * Failure Message.
     *
     * @var string
     */
    protected $_failureMessage;

    /**
     * Duplicate Detail.
     *
     * @var string
     */
    protected $_duplicateDetail;

    /**
     * Failure Detail.
     *
     * @var string
     */
    protected $_failureDetail;

    /**
     * Is Success?
     *
     * @var boolean
     */
    protected $_isSuccess;

    /**
     * Is Failure?
     *
     * @var boolean
     */
    protected $_isFailure;

    /**
     * Is Duplicate?
     *
     * @var boolean
     */
    protected $_isDuplicate;

    /**
     * Sets a parameter value.
     *
     * @param string $key
     * @param string $value
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setParam($key, $value)
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
    public function getExternalReference()
    {
        return $this->_externalReference;
    }

    /**
     * External Reference Setter.
     *
     * @param string $externalReference
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setExternalReference($externalReference)
    {
        $this->_externalReference = $externalReference;

        return $this;
    }

    /**
     * Type Getter.
     *
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Type Setter.
     *
     * @param string $type
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setType($type)
    {
        $this->_type = $type;
    }

    /**
     * Operation Getter.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->_operation;
    }

    /**
     * Operation Setter.
     *
     * @param string $operation
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setOperation($operation)
    {
        $this->_operation = $operation;
    }

    /**
     * Entity Getter.
     *
     * @return string
     */
    public function getEntity()
    {
        return $this->_entity;
    }

    /**
     * Entity Setter.
     *
     * @param string $entity
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setEntity($entity)
    {
        $this->_entity = $entity;
    }

    /**
     * Item Getter.
     *
     * @return string
     */
    public function getItem()
    {
        return $this->_item;
    }

    /**
     * Entity Setter.
     *
     * @param string $item
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setItem($item)
    {
        $this->_item = $item;
    }

    /**
     * Timestamp Getter.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->_queryTime;
    }

    /**
     * Timestamp Setter.
     *
     * @param string $timestamp
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setTimestamp($timestamp)
    {
        $this->_queryTime = $timestamp;
    }

    /**
     * Message Getter.
     *
     * @return string
     */
    public function getMessage()
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
    public function getDetail()
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
     * Is this a successfull import?
     *
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->_isSuccess;
    }

    /**
     * Is Success Setter.
     *
     * @param boolean $isSuccess
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setIsSuccess($isSuccess)
    {
        $this->_isSuccess = $isSuccess;
    }

    /**
     * Is this a failed import?
     *
     * @return boolean
     */
    public function isFailure()
    {
        return $this->_isFailure;
    }

    /**
     * Is Failure Setter.
     *
     * @param boolean $isSuccess
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setIsFailure($isFailure)
    {
        $this->_isFailure = $isFailure;
    }

    /**
     * Is this a duplicate import?
     *
     * @return boolean
     */
    public function isDuplicate()
    {
        return $this->_isDuplicate;
    }

    /**
     * Is Duplicate Setter.
     *
     * @param boolean $isDuplicate
     *
     * @return \SixBySix\RealtimeDespatch\Report\ImportReportLine
     */
    public function setIsDuplicate($isDuplicate)
    {
        $this->_isDuplicate = $isDuplicate;
    }

    /**
     * Returns the result of the report line.
     *
     * @return string
     */
    public function getResult()
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