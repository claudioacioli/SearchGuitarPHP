<?php

class GuitarSpec
{
    private $model;
    private $builder;
    private $type;
    private $numString;
    private $topWood;
    private $backWood;

    public function __construct($builder, $model, $type, $numStrings, $topWood, $backWood)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->numString = $numStrings;
        $this->topWood = $topWood;
        $this->backWood = $backWood;
    }

    /**
     * @return mixed
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getNumString()
    {
        return $this->numString;
    }

    /**
     * @return mixed
     */
    public function getTopWood()
    {
        return $this->topWood;
    }

    /**
     * @return mixed
     */
    public function getBackWood()
    {
        return $this->backWood;
    }

    public function matches(GuitarSpec $guitarSpec)
    {
        if($this->getBuilder() !== $guitarSpec->getBuilder())
            return false;

        if(strtolower($this->getModel()) !== strtolower($guitarSpec->getModel()))
            return false;

        if($this->getType() !== $guitarSpec->getType())
            return false;

        if($this->getTopWood() !== $guitarSpec->getTopWood())
            return false;

        if($this->getBackWood() !== $guitarSpec->getBackWood())
            return false;

        return $this->getNumString() === $guitarSpec->getNumString();
    }
}