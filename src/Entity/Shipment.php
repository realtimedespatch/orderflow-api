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
    protected string $_externalReference;

    /**
     * Shipment State.
     *
     * @var string
     */
    protected string $_state;

    /**
     * Shipment State.
     *
     * @var string
     */
    protected string $_earliestShipDate;

    /**
     * Shipment Site.
     *
     * @var string
     */
    protected string $_site;

    /**
     * Shipment Priority.
     *
     * @var string
     */
    protected string $_priority;

    /**
     * Shipment Priority Name.
     *
     * @var string
     */
    protected string $_priorityName;

    /**
     * Shipment Weight.
     *
     * @var float
     */
    protected float $_weight;

    /**
     * Shipment Weight Units.
     *
     * @var string
     */
    protected string $_weightUnits;

    /**
     * Shipment Address.
     *
     * @var ShipmentAddress
     */
    protected ShipmentAddress $_address;

    /**
     * Shipment Courier.
     *
     * @var string
     */
    protected string $_courier;

    /**
     * Delivery Suggestion Code.
     *
     * @var string
     */
    protected string $_deliverySuggestionCode;

    /**
     * Delivery Suggestion Name.
     *
     * @var string
     */
    protected string $_deliverySuggestionName;

    /**
     * Picking Model.
     *
     * @var string
     */
    protected string $_pickingMode;

    /**
     * Despatch Comment.
     *
     * @var string
     */
    protected string $_despatchComment;

    /**
     * Despatch Reference.
     *
     * @var string
     */
    protected string $_despatchReference;

    /**
     * Delivery Instruction.
     *
     * @var string
     */
    protected string $_deliveryInstruction;

    /**
     * Order Reference.
     *
     * @var string
     */
    protected string $_orderItem = 'entity:order';

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
     * Shipment State Getter.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->_state;
    }

    /**
     * Earliest Shipment Date Getter.
     *
     * @return string
     */
    public function getEarliestShipDate(): string
    {
        return $this->_earliestShipDate;
    }

    /**
     * Shipment Site Getter.
     *
     * @return string
     */
    public function getSite(): string
    {
        return $this->_site;
    }

    /**
     * Shipment Priority Getter.
     *
     * @return string
     */
    public function getPriority(): string
    {
        return $this->_priority;
    }

    /**
     * Shipment Priority Name Getter.
     *
     * @return string
     */
    public function getPriorityName(): string
    {
        return $this->_priorityName;
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
     * Weight Units Getter.
     *
     * @return string
     */
    public function getWeightUnits(): string
    {
        return $this->_weightUnits;
    }

    /**
     * Shipment Address Getter.
     *
     * @return ShipmentAddress
     */
    public function getAddress(): ShipmentAddress
    {
        return $this->_address;
    }

    /**
     * Courier Getter.
     *
     * @return string
     */
    public function getCourier(): string
    {
        return $this->_courier;
    }

    /**
     * Delivery Suggestion Code Getter,
     *
     * @return string
     */
    public function getDeliverySuggestionCode(): string
    {
        return $this->_deliverySuggestionCode;
    }

    /**
     * Delivery Suggestion Name Getter.
     *
     * @return string
     */
    public function getDeliverySuggestionName(): string
    {
        return $this->_deliverySuggestionName;
    }

    /**
     * Picking Mode Getter.
     *
     * @return string
     */
    public function getPickingMode(): string
    {
        return $this->_pickingMode;
    }

    /**
     * Despatch Comment Getter.
     *
     * @return string
     */
    public function getDespatchComment(): string
    {
        return $this->_despatchComment;
    }

    /**
     * Despatch Reference Getter.
     *
     * @return string
     */
    public function getDespatchReference(): string
    {
        return $this->_despatchReference;
    }

    /**
     * Delivery Instruction Getter.
     *
     * @return string
     */
    public function getDeliveryInstruction(): string
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
    public function setExternalReference(string $externalReference): Shipment
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
    public function setState(string $state): Shipment
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
    public function setEarliestShipDate(string $earliestShipDate): Shipment
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
    public function setSite(string $site): Shipment
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
    public function setPriority(string $priority): Shipment
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
    public function setPriorityName(string $priorityName): Shipment
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
    public function setWeight(float $weight): Shipment
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
    public function setWeightUnits(string $weightUnits): Shipment
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
    public function setAddress(ShipmentAddress $address): Shipment
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
    public function setCourier(string $courier): Shipment
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
    public function setDeliverySuggestionCode(string $deliverySuggestionCode): Shipment
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
    public function setDeliverySuggestionName(string $deliverySuggestionName): Shipment
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
    public function setPickingMode(string $pickingMode): Shipment
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
    public function setDespatchComment(string $despatchComment): Shipment
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
    public function setDespatchReference(string $despatchReference): Shipment
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
    public function setDeliveryInstruction(string $deliveryInstruction): Shipment
    {
        $this->_deliveryInstruction = $deliveryInstruction;

        return $this;
    }
}
