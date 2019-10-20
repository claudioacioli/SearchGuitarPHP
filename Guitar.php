<?php

class Guitar
{
    private $serialNumber;
    private $price;
    private $spec;

    public function __construct($serialNumber, $price, GuitarSpec $spec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return GuitarSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }

}