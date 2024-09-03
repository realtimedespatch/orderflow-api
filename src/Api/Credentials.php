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
    protected string $_endpoint;

    /**
     * Channel.
     *
     * @var string
     */
    protected string $_channel;

    /**
     * Organisation.
     *
     * @var string
     */
    protected string $_organisation;

    /**
     * Username.
     *
     * @var string
     */
    protected string $_username;

    /**
     * Password.
     *
     * @var string
     */
    protected string $_password;

    /**
     * Endpoint Setter.
     *
     * @param string $endpoint
     */
    public function setEndpoint(string $endpoint): void
    {
        $this->_endpoint = $endpoint;
    }

    /**
     * Endpoint Getter.
     *
     * @return string|null
     */
    public function getEndpoint(): ?string
    {
        return $this->_endpoint;
    }

    /**
     * Channel Setter.
     *
     * @param string $channel
     */
    public function setChannel(string $channel): void
    {
        $this->_channel = $channel;
    }

    /**
     * Channel Getter.
     *
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->_channel;
    }

    /**
     * Organisation Setter.
     *
     * @param string $organisation
     */
    public function setOrganisation(string $organisation): void
    {
        $this->_organisation = $organisation;
    }

    /**
     * Organisation Getter.
     *
     * @return string|null
     */
    public function getOrganisation(): ?string
    {
        return $this->_organisation;
    }

    /**
     * Username Setter.
     *
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->_username = $username;
    }

    /**
     * Username Getter.
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->_username;
    }

    /**
     * Password Setter.
     *
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->_password = $password;
    }

    /**
     * Password Getter.
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->_password;
    }

    /**
     * Returns the credentials as an array.
     *
     * @return array<string,string>
     */
    public function toArray(): array
    {
        $data = array();

        $data['username'] = $this->_username;
        $data['password'] = $this->_password;
        $data['endpoint'] = $this->_username;
        $data['channel']  = $this->_channel;

        return $data;
    }
}
