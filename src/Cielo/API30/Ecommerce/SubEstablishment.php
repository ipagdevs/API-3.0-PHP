<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */


class SubEstablishment implements \JsonSerializable
{
    private $establishmentCode;
    private $identity;
    private $mcc;
    private $address;
    private $city;
    private $state;
    private $countryCode;
    private $postalCode;
    private $phoneNumber;


    public function __construct()
    {
        $this->countryCode = "076";
    }
    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->establishmentCode    = $data->establishmentCode ?? $data->establishmentCode;
        $this->identity             = $data->identity          ?? $data->identity;
        $this->mcc                  = $data->mcc               ?? $data->mcc;
        $this->address              = $data->address           ?? $data->address;
        $this->city                 = $data->city              ?? $data->city;
        $this->state                = $data->state             ?? $data->state;
        $this->countryCode          = $data->countryCode       ?? $data->countryCode;
        $this->postalCode           = $data->postalCode        ?? $data->postalCode;
        $this->phoneNumber          = $data->phoneNumber       ?? $data->phoneNumber;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }


    /**
     * Get the value of establishmentCode
     */
    public function getEstablishmentCode()
    {
        return $this->establishmentCode;
    }

    /**
     * Set the value of establishmentCode
     *
     * @return  self
     */
    public function setEstablishmentCode($establishmentCode)
    {
        $this->establishmentCode = $establishmentCode;

        return $this;
    }

    /**
     * Get the value of identity
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Set the value of identity
     *
     * @return  self
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Get the value of mcc
     */
    public function getMcc()
    {
        return $this->mcc;
    }

    /**
     * Set the value of mcc
     *
     * @return  self
     */
    public function setMcc($mcc)
    {
        $this->mcc = $mcc;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of countryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set the value of countryCode
     *
     * @return  self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get the value of postalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     *
     * @return  self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of phoneNumber
     *
     * @return  self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}