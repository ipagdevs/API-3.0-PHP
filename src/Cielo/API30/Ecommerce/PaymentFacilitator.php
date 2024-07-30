<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class PaymentFacilitator
 *
 * @package Cielo\API30\Ecommerce
 */
class PaymentFacilitator implements \JsonSerializable
{
    private $subEstablishment;

    private $establishmentCode;

    public function __construct($subEstablishment = null)
    {
        $this->subEstablishment = $subEstablishment;
        $this->establishmentCode = null;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->subEstablishment = new SubEstablishment();
        $this->establishmentCode = $data->EstablishmentCode ?? null;
        $this->subEstablishment->populate($data);
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function subEstablishment()
    {
        if (is_null($this->subEstablishment)) {
            $this->setSubEstablishment(new SubEstablishment());
        }

        return $this->getSubEstablishment();
    }

    /**
     * Get the value of subEstablishment
     */
    public function getSubEstablishment()
    {
        return $this->subEstablishment;
    }

    /**
     * Set the value of subEstablishment
     *
     * @return  self
     */
    public function setSubEstablishment(SubEstablishment $subEstablishment)
    {
        $this->subEstablishment = $subEstablishment;

        return $this;
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
}
