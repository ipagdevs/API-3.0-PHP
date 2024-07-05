<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */


class PaymentFacilitator implements \JsonSerializable
{

    private $paymentFacilitator;

    private $subEstablishment;
    

    public function __construct($paymentFacilitator)
    {
        $this->paymentFacilitator = $paymentFacilitator;
    }
    
    /**
     * @param $json
     *
     * @return PaymentFacilitator
     */
    public static function fromJson($json)
    {
        $paymentFacilitator = new PaymentFacilitator(json_decode($json));
        $paymentFacilitator->populate(json_decode($json));

        return $paymentFacilitator;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->paymentFacilitator = $data->paymentFacilitator ?? $data->paymentFacilitator;
        $this->subEstablishment =  new SubEstablishment();
        $this->subEstablishment->populate($data);
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * Get the value of paymentFacilitator
     */ 
    public function getPaymentFacilitator()
    {
        return $this->paymentFacilitator;
    }

    /**
     * Set the value of paymentFacilitator
     *
     * @return  self
     */ 
    public function setPaymentFacilitator($paymentFacilitator)
    {
        $this->paymentFacilitator = $paymentFacilitator;

        return $this;
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
    public function setSubEstablishment($subEstablishment)
    {
        $this->subEstablishment = $subEstablishment;

        return $this;
    }
}