<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class SubEstablishment
 *
 * @package Cielo\API30\Ecommerce
 */
class SubEstablishment implements \JsonSerializable
{
    const DEFAULT_COUTRY_CODE = "076";

    private $establishmentCode;
    private $identity;
    private $mcc;
    private $address;
    private $city;
    private $state;
    private $postalCode;
    private $countryCode;
    private $phoneNumber;
    private $companyName;

    public function __construct()
    {
        $this->countryCode = self::DEFAULT_COUTRY_CODE;
        $this->establishmentCode = null;
        $this->identity = null;
        $this->mcc = null;
        $this->address = null;
        $this->city = null;
        $this->state = null;
        $this->countryCode = null;
        $this->postalCode = null;
        $this->phoneNumber = null;
        $this->companyName = null;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->establishmentCode  = $data->EstablishmentCode ?? null;
        $this->identity = $data->Identity ?? null;
        $this->mcc = $data->Mcc ?? null;
        $this->address = $data->Address ?? null;
        $this->city = $data->City ?? null;
        $this->state = $data->State ?? null;
        $this->countryCode = $data->CountryCode ?? null;
        $this->postalCode = $data->PostalCode ?? null;
        $this->phoneNumber = $data->PhoneNumber ?? null;
        $this->companyName = $data->CompanyName ?? null;
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
        $this->establishmentCode = mb_substr(trim($establishmentCode), 0, 15);

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
        $this->address = mb_substr(trim($address), 0, 22);

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
        $this->city = mb_substr(trim($city), 0, 13);

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
        return $this->countryCode ?? self::DEFAULT_COUTRY_CODE;
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
        $this->postalCode = mb_substr(trim($postalCode), 0, 9);

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

    /**
     * Get the value of companyName
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set the value of companyName
     * 
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }
}
