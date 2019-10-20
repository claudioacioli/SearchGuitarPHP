<?php

class Inventory
{
    private $guitars;

    public function __construct()
    {
        $this->guitars = array();
    }

    public function addGuitar($serialNumber, $price, GuitarSpec $spec)
    {
        $guitar = new Guitar($serialNumber, $price, $spec);
        array_push($this->guitars, $guitar);
    }

    public function search(GuitarSpec $searchSpec)
    {
        $matchesGuittars = array();
        foreach($this->guitars as $guitar)
            if($guitar->getSpec()->matches($searchSpec))
                array_push($matchesGuittars, $guitar);
        return $matchesGuittars;
    }
}