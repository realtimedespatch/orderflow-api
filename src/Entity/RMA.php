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
    protected $_externalReference;

    /**
     * Return Lines.
     *
     * @var array
     */
    protected $_lines;

    /**
     * Return Reference.
     *
     * @var string
     */
    protected $_authorisation;

    /**
     * Authorised Flag.
     *
     * @var string
     */
    protected $_authorised;

    /**
     * Return Type..
     *
     * @var string
     */
    protected $_type;

    /**
     * Store Identifier.
     *
     * @var string
     */
    protected $_storeId;

    /**
     * Return Date.
     *
     * @var string
     */
    protected $_returnDate;

    /**
     * Return Note.
     *
     * @var float
     */
    protected $_note;

    /**
     * Constructor.
     *
     * @param string|null $authorisation
     */
    public function __construct(string $authorisation = null)
    {
        $this->_authorisation = $authorisation;
        $this->_lines         = array();
    }

    /**
     * Returns the current return lines.
     *
     * @return array
     */
    public function getLines()
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
    public function addLine(RMALine $line)
    {
        $this->_lines[] = $line;

        return $this;
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
     * @return RMA
     */
    public function setExternalReference(string $externalReference)
    {
        $this->_externalReference = $externalReference;

        return $this;
    }

    /**
     * Authorisation Getter.
     *
     * @return string
     */
    public function getAuthorisation()
    {
        return (string) $this->_authorisation;
    }

    /**
     * Authorisation Setter.
     *
     * @param string $authorisation
     *
     * @return RMA
     */
    public function setAuthorisation(string $authorisation)
    {
        $this->_authorisation = $authorisation;

        return $this;
    }

    /**
     * Authorised Getter.
     *
     * @return bool
     */
    public function getAuthorised()
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
    public function setAuthorised(bool $authorised)
    {
        $this->_authorised = (boolean) $authorised;

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
     * @return RMA
     */
    public function setType(string $type)
    {
        $this->_type = $type;

        return $this;
    }

    /**
     * StoreId Getter.
     *
     * @return string
     */
    public function getStoreId()
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
    public function setStoreId(string $storeId)
    {
        $this->_storeId = $storeId;

        return $this;
    }

    /**
     * ReturnDate Getter.
     *
     * @return string
     */
    public function getReturnDate()
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
    public function setReturnDate(string $returnDate)
    {
        $this->_returnDate = $returnDate;

        return $this;
    }

    /**
     * Note Getter.
     *
     * @return string
     */
    public function getNote()
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
    public function setNote(string $note)
    {
        $this->_note = $note;

        return $this;
    }
}
