<?php

namespace SixBySix\RealtimeDespatch\Api;

/**
 * Credentials.
 */
class Credentials
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $_endpoint;

    /**
     * Channel.
     *
     * @var string
     */
    protected $_channel;

    /**
     * Organisation.
     *
     * @var string
     */
    protected $_organisation;

    /**
     * Username.
     *
     * @var string
     */
    protected $_username;

    /**
     * Password.
     *
     * @var string
     */
    protected $_password;

    /**
     * Endpoint Setter.
     *
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->_endpoint = $endpoint;
    }

    /**
     * Endpoint Getter.
     *
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->_endpoint;
    }

    /**
     * Channel Setter.
     *
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->_channel = $channel;
    }

    /**
     * Channel Getter.
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->_channel;
    }

    /**
     * Organisation Setter.
     *
     * @param string $organisation
     */
    public function setOrganisation($organisation)
    {
        $this->_organisation = $organisation;
    }

    /**
     * Organisation Getter.
     *
     * @return string|null
     */
    public function getOrganisation()
    {
        return $this->_organisation;
    }

    /**
     * Username Setter.
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * Username Getter.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Password Setter.
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * Password Getter.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Returns the credentials as an array.
     *
     * @return array
     */
    public function toArray()
    {
        $data = array();

        $data['username'] = $this->_username;
        $data['password'] = $this->_password;
        $data['endpoint'] = $this->_username;
        $data['channel']  = $this->_channel;

        return $data;
    }
}