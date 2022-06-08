<?php

namespace SixBySix\RealtimeDespatch\Entity;

/**
 * Address.
 */
abstract class Address extends AbstractEntity
{
    /**
     * Line 1.
     *
     * @var string
     */
    protected $_addressLine1;

    /**
     * Line 2.
     *
     * @var string
     */
    protected $_addressLine2;

    /**
     * Line 3.
     *
     * @var string
     */
    protected $_addressLine3;

    /**
     * Line 4.
     *
     * @var string
     */
    protected $_addressLine4;

    /**
     * Line 5.
     *
     * @var string
     */
    protected $_addressLine5;

    /**
     * Line 6.
     *
     * @var string
     */
    protected $_addressLine6;

    /**
     * Country Code.
     *
     * @var string
     */
    protected $_countryCode;

    /**
     * Contact Name.
     *
     * @var string
     */
    protected $_postCode;

    /**
     * Post Code.
     *
     * @var string
     */
    protected $_contactName;

    /**
     * Email Address.
     *
     * @var string
     */
    protected $_emailAddress;

    /**
     * Day Phone Number.
     *
     * @var string
     */
    protected $_dayPhoneNumber;

    /**
     * Evening Phone Number.
     *
     * @var string
     */
    protected $_eveningPhoneNumber;

    /**
     * Mobile Phone Number.
     *
     * @var string
     */
    protected $_mobilePhoneNumber;

    /**
     * Fax Number.
     *
     * @var string
     */
    protected $_faxNumber;

    /**
     * Company Name.
     *
     * @var string
     */
    protected $_companyName;

    /**
     * Returns the type of the address.
     *
     * @return string
     */
    public abstract function getType();

    /**
     * Line 1 Getter.
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->_addressLine1;
    }

    /**
     * Line 2 Getter.
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->_addressLine2;
    }

    /**
     * Line 3 Getter.
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->_addressLine3;
    }

    /**
     * Line 4 Getter.
     *
     * @return string
     */
    public function getAddressLine4()
    {
        return $this->_addressLine4;
    }

    /**
     * Line 5 Getter.
     *
     * @return string
     */
    public function getAddressLine5()
    {
        return $this->_addressLine5;
    }

    /**
     * Line 6 Getter.
     *
     * @return string
     */
    public function getAddressLine6()
    {
        return $this->_addressLine6;
    }

    /**
     * Country Code Getter.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->_countryCode;
    }

    /**
     * Post Code Getter.
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->_postCode;
    }

    /**
     * Contact Name Getter.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->_contactName;
    }

    /**
     * Email Address Getter.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->_emailAddress;
    }

    /**
     * Day Phone Number Getter.
     *
     * @return string
     */
    public function getDayPhoneNumber()
    {
        return $this->_dayPhoneNumber;
    }

    /**
     * Evening Phone Number Getter.
     *
     * @return string
     */
    public function getEveningPhoneNumber()
    {
        return $this->_eveningPhoneNumber;
    }

    /**
     * Mobile Phone Number Getter.
     *
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->_mobilePhoneNumber;
    }

    /**
     * Fax Number Getter.
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->_faxNumber;
    }

    /**
     * Company Name Getter.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->_companyName;
    }

    /**
     * Line 1 Setter.
     *
     * @param string $addressLine1
     *
     * @return Address
     */
    public function setAddressLine1(string $addressLine1)
    {
        $this->_addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Line 2 Setter.
     *
     * @param string $addressLine2
     *
     * @return Address
     */
    public function setAddressLine2(string $addressLine2)
    {
        $this->_addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Line 3 Setter.
     *
     * @param string $addressLine3
     *
     * @return Address
     */
    public function setAddressLine3(string $addressLine3)
    {
        $this->_addressLine3 = $addressLine3;

        return $this;
    }

    /**
     * Line 4 Setter.
     *
     * @param string $addressLine4
     *
     * @return Address
     */
    public function setAddressLine4(string $addressLine4)
    {
        $this->_addressLine4 = $addressLine4;

        return $this;
    }

    /**
     * Line 5 Setter.
     *
     * @param string $addressLine5
     *
     * @return Address
     */
    public function setAddressLine5(string $addressLine5)
    {
        $this->_addressLine5 = $addressLine5;

        return $this;
    }

    /**
     * Line 6 Setter.
     *
     * @param string $addressLine6
     *
     * @return Address
     */
    public function setAddressLine6(string $addressLine6)
    {
        $this->_addressLine6 = $addressLine6;

        return $this;
    }

    /**
     * Country Code Setter.
     *
     * @param string $countryCode
     *
     * @return Address
     */
    public function setCountryCode(string $countryCode)
    {
        $this->_countryCode = $countryCode;

        return $this;
    }

    /**
     * Post Code Setter.
     *
     * @param string $postCode
     *
     * @return Address
     */
    public function setPostCode(string $postCode)
    {
        $this->_postCode = $postCode;

        return $this;
    }

    /**
     * Contact Name Setter.
     *
     * @param string $contactName
     *
     * @return Address
     */
    public function setContactName(string $contactName)
    {
        $this->_contactName = $contactName;

        return $this;
    }

    /**
     * Email Address Setter.
     *
     * @param string $emailAddress
     *
     * @return Address
     */
    public function setEmailAddress(string $emailAddress)
    {
        $this->_emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Daytime Phone Number Setter.
     *
     * @param string $dayPhoneNumber
     *
     * @return Address
     */
    public function setDayPhoneNumber(string $dayPhoneNumber)
    {
        $this->_dayPhoneNumber = $dayPhoneNumber;

        return $this;
    }

    /**
     * Evening Phone Number Setter.
     *
     * @param string $eveningPhoneNumber
     *
     * @return Address
     */
    public function setEveningPhoneNumber(string $eveningPhoneNumber)
    {
        $this->_eveningPhoneNumber = $eveningPhoneNumber;

        return $this;
    }

    /**
     * Mobile Phone Number Setter.
     *
     * @param string $mobilePhoneNumber
     *
     * @return Address
     */
    public function setMobilePhoneNumber(string $mobilePhoneNumber)
    {
        $this->_mobilePhoneNumber = $mobilePhoneNumber;

        return $this;
    }

    /**
     * Fax Number Setter.
     *
     * @param string $faxNumber
     *
     * @return Address
     */
    public function setFaxNumber(string $faxNumber)
    {
        $this->_faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Company Name Setter.
     *
     * @param string $companyName
     *
     * @return Address
     */
    public function setCompanyName(string $companyName)
    {
        $this->_companyName = $companyName;

        return $this;
    }

    /**
     * Collapses the address.
     *
     * @return void
     */
    public function collapse($index = 1)
    {
        if ($index > 6) {
            return;
        }

        if ( ! $this->{'_addressLine'.$index}) {
            for ($i = $index; $i <= 5; $i++) {
                if ($this->{'_addressLine'.($i+1)}) {
                    $this->{'_addressLine'.($index)}   = $this->{'_addressLine'.($i+1)};
                    $this->{'_addressLine'.($i+1)} = null;
                    break;
                }
            }
        }

        $this->collapse($index + 1);
    }
}
