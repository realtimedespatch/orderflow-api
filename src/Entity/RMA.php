<?php

namespace SixBySix\RealtimeDespatch\Entity;

use SixBySix\RealtimeDespatch\Entity\RMALine;

/**
 * RMA.
 */
class RMA extends AbstractEntity
{
    /**
     * External Reference.
     *
     * @var string
     */
    protected string $_externalReference;

    /**
     * Return Lines.
     *
     * @var array<\SixBySix\RealtimeDespatch\Entity\RMALine>
     */
    protected array $_lines;

    /**
     * Return Reference.
     * @var string
     */
    protected string $_authorisation;

    /**
     * Authorised Flag.
     * @var bool
     */
    protected bool $_authorised;

    /**
     * Return Type..
     *
     * @var string
     */
    protected string $_type;

    /**
     * Store Identifier.
     *
     * @var string
     */
    protected string $_storeId;

    /**
     * Return Date.
     *
     * @var string
     */
    protected string $_returnDate;

    /**
     * Return Note.
     * @var string
     */
    protected string $_note;

    /**
     * Constructor.
     * @param string|null $authorisation
     */
    public function __construct(string $authorisation = null)
    {
        $this->_authorisation = $authorisation;
        $this->_lines         = [];
    }

    /**
     * Returns the current return lines.
     *
     * @return array<\SixBySix\RealtimeDespatch\Entity\RMALine>
     */
    public function getLines(): array
    {
        return $this->_lines;
    }

    /**
     * Adds a new line to the return.
     *
     * @param \SixBySix\RealtimeDespatch\Entity\RMALine $line
     *
     * @return RMA
     */
    public function addLine(RMALine $line): RMA
    {
        $this->_lines[] = $line;

        return $this;
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
     * @return RMA
     */
    public function setExternalReference(string $externalReference): RMA
    {
        $this->_externalReference = $externalReference;

        return $this;
    }

    /**
     * Authorisation Getter.
     *
     * @return string
     */
    public function getAuthorisation(): string
    {
        return (string) $this->_authorisation;
    }

    /**
     * Authorisation Setter.
     *
     * @param string $authorisation
     * @return RMA
     */
    public function setAuthorisation(string $authorisation): RMA
    {
        $this->_authorisation = $authorisation;

        return $this;
    }

    /**
     * Authorised Getter.
     *
     * @return bool
     */
    public function getAuthorised(): bool
    {
        return (boolean) $this->_authorised;
    }

    /**
     * Authorised Setter.
     *
     * @param boolean $authorised
     *
     * @return RMA
     */
    public function setAuthorised(bool $authorised): RMA
    {
        $this->_authorised = (boolean) $authorised;

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
     * @return RMA
     */
    public function setType(string $type): RMA
    {
        $this->_type = $type;

        return $this;
    }

    /**
     * StoreId Getter.
     *
     * @return string
     */
    public function getStoreId(): string
    {
        return $this->_storeId;
    }

    /**
     * StoreId Setter.
     *
     * @param string $storeId
     *
     * @return RMA
     */
    public function setStoreId(string $storeId): RMA
    {
        $this->_storeId = $storeId;

        return $this;
    }

    /**
     * ReturnDate Getter.
     *
     * @return string
     */
    public function getReturnDate(): string
    {
        return $this->_returnDate;
    }

    /**
     * ReturnDate Setter.
     *
     * @param string $returnDate
     *
     * @return RMA
     */
    public function setReturnDate(string $returnDate): RMA
    {
        $this->_returnDate = $returnDate;

        return $this;
    }

    /**
     * Note Getter.
     *
     * @return string
     */
    public function getNote(): string
    {
        return (string) $this->_note;
    }

    /**
     * Note Setter.
     *
     * @param string $note
     *
     * @return RMA
     */
    public function setNote(string $note): RMA
    {
        $this->_note = $note;

        return $this;
    }
}
