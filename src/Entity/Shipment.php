<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Shipment.
 */
class Shipment extends AbstractEntity
{
    /**
     * External Reference.
     *
     * @var string
     */
    protected $_externalReference;

    /**
     * Shipment State.
     *
     * @var string
     */
    protected $_state;

    /**
     * Shipment State.
     *
     * @var string
     */
    protected $_earliestShipDate;

    /**
     * Shipment Site.
     *
     * @var string
     */
    protected $_site;

    /**
     * Shipment Priority.
     *
     * @var string
     */
    protected $_priority;

    /**
     * Shipment Priority Name.
     *
     * @var string
     */
    protected $_priorityName;

    /**
     * Shipment Weight.
     *
     * @var float
     */
    protected $_weight;

    /**
     * Shipment Weight Units.
     *
     * @var string
     */
    protected $_weightUnits;

    /**
     * Shipment Address.
     *
     * @var ShipmentAddress
     */
    protected $_address;

    /**
     * Shipment Courier.
     *
     * @var string
     */
    protected $_courier;

    /**
     * Delivery Suggestion Code.
     *
     * @var string
     */
    protected $_deliverySuggestionCode;

    /**
     * Delivery Suggestion Name.
     *
     * @var string
     */
    protected $_deliverySuggestionName;

    /**
     * Picking Model.
     *
     * @var string
     */
    protected $_pickingMode;

    /**
     * Despatch Comment.
     *
     * @var string
     */
    protected $_despatchComment;

    /**
     * Despatch Reference.
     *
     * @var string
     */
    protected $_despatchReference;

    /**
     * Delivery Instruction.
     *
     * @var string
     */
    protected $_deliveryInstruction;

    /**
     * Order Reference.
     *
     * @var string
     */
    protected $_orderItem = 'entity:order';

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
     * Shipment State Getter.
     *
     * @return string
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * Earliest Shipment Date Getter.
     *
     * @return string
     */
    public function getEarliestShipDate()
    {
        return $this->_earliestShipDate;
    }

    /**
     * Shipment Site Getter.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->_site;
    }

    /**
     * Shipment Priority Getter.
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->_priority;
    }

    /**
     * Shipment Priority Name Getter.
     *
     * @return string
     */
    public function getPriorityName()
    {
        return $this->_priorityName;
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
     * Weight Units Getter.
     *
     * @return string
     */
    public function getWeightUnits()
    {
        return $this->_weightUnits;
    }

    /**
     * Shipment Address Getter.
     *
     * @return ShipmentAddress
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * Courier Getter.
     *
     * @return string
     */
    public function getCourier()
    {
        return $this->_courier;
    }

    /**
     * Delivery Suggestion Code Getter,
     *
     * @return string
     */
    public function getDeliverySuggestionCode()
    {
        return $this->_deliverySuggestionCode;
    }

    /**
     * Delivery Suggestion Name Getter.
     *
     * @return string
     */
    public function getDeliverySuggestionName()
    {
        return $this->_deliverySuggestionName;
    }

    /**
     * Picking Mode Getter.
     *
     * @return string
     */
    public function getPickingMode()
    {
        return $this->_pickingMode;
    }

    /**
     * Despatch Comment Getter.
     *
     * @return string
     */
    public function getDespatchComment()
    {
        return $this->_despatchComment;
    }

    /**
     * Despatch Reference Getter.
     *
     * @return string
     */
    public function getDespatchReference()
    {
        return $this->_despatchReference;
    }

    /**
     * Delivery Instruction Getter.
     *
     * @return string
     */
    public function getDeliveryInstruction()
    {
        return $this->_deliveryInstruction;
    }

    /**
     * External Reference Setter.
     *
     * @param string $externalReference
     *
     * @return Shipment
     */
    public function setExternalReference(string $externalReference)
    {
        $this->_externalReference = $externalReference;

        return $this;
    }

    /**
     * Shipment State Setter.
     *
     * @param string $state
     *
     * @return Shipment
     */
    public function setState(string $state)
    {
        $this->_state = $state;

        return $this;
    }

    /**
     * Earliest Ship Date Setter.
     *
     * @param string $earliestShipDate
     *
     * @return Shipment
     */
    public function setEarliestShipDate(string $earliestShipDate)
    {
        $this->_earliestShipDate = $earliestShipDate;

        return $this;
    }

    /**
     * Shipment Site Setter.
     *
     * @param string $site
     *
     * @return Shipment
     */
    public function setSite(string $site)
    {
        $this->_site = $site;

        return $this;
    }

    /**
     * Priority Setter.
     *
     * @param string $priority
     *
     * @return Shipment
     */
    public function setPriority(string $priority)
    {
        $this->_priority = $priority;

        return $this;
    }

    /**
     * Priority Name Setter.
     *
     * @param string $priorityName
     *
     * @return Shipment
     */
    public function setPriorityName(string $priorityName)
    {
        $this->_priorityName = $priorityName;

        return $this;
    }

    /**
     * Weight Setter.
     *
     * @param float $weight
     *
     * @return Shipment
     */
    public function setWeight(float $weight)
    {
        $this->_weight = (float) $weight;

        return $this;
    }

    /**
     * Weight Units Setter.
     *
     * @param string $weightUnits
     *
     * @return Shipment
     */
    public function setWeightUnits(string $weightUnits)
    {
        $this->_weightUnits = $weightUnits;

        return $this;
    }

    /**
     * Address Setter.
     *
     * @param ShipmentAddress $address
     *
     * @return Shipment
     */
    public function setAddress(ShipmentAddress $address)
    {
        $this->_address = $address;

        return $this;
    }

    /**
     * Courier Setter.
     *
     * @param string $courier
     *
     * @return Shipment
     */
    public function setCourier(string $courier)
    {
        $this->_courier = $courier;

        return $this;
    }

    /**
     * Delivery Suggestion Code Setter.
     *
     * @param string $deliverySuggestionCode
     *
     * @return Shipment
     */
    public function setDeliverySuggestionCode(string $deliverySuggestionCode)
    {
        $this->_deliverySuggestionCode = $deliverySuggestionCode;

        return $this;
    }

    /**
     * Delivery Suggestion Name Setter.
     *
     * @param string $deliverySuggestionName
     *
     * @return Shipment
     */
    public function setDeliverySuggestionName(string $deliverySuggestionName)
    {
        $this->_deliverySuggestionName = $deliverySuggestionName;

        return $this;
    }

    /**
     * Picking Mode Setter.
     *
     * @param string $pickingMode
     *
     * @return Shipment
     */
    public function setPickingMode(string $pickingMode)
    {
        $this->_pickingMode = $pickingMode;

        return $this;
    }

    /**
     * Despatch Comment Setter.
     *
     * @param string $despatchComment
     *
     * @return Shipment
     */
    public function setDespatchComment(string $despatchComment)
    {
        $this->_despatchComment = $despatchComment;

        return $this;
    }

    /**
     * Despatch Reference Setter.
     *
     * @param string $despatchReference
     *
     * @return Shipment
     */
    public function setDespatchReference(string $despatchReference)
    {
        $this->_despatchReference = $despatchReference;

        return $this;
    }

    /**
     * Delivery Instruction Setter.
     *
     * @param string $deliveryInstruction
     *
     * @return Shipment
     */
    public function setDeliveryInstruction(string $deliveryInstruction)
    {
        $this->_deliveryInstruction = $deliveryInstruction;

        return $this;
    }
}
