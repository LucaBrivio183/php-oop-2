<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private $characteristics;
    private $dimensions;

    public function __construct($_image, $_name, $_price, $_category, $_characteristics, $_dimensions)
    {
        parent::__construct($_image, $_name, $_price, $_category);
        $this->characteristics = $_characteristics;
        $this->dimensions  = $_dimensions;
    }
    //getter charateristics
    public function getCharacteristics()
    {
        return $this->characteristics;
    }
    //setter charateristics
    public function setCharacteristics($_characteristics)
    {
        $this->characteristics = $_characteristics;
    }
    //getter dimensions
    public function getDimensions()
    {
        return $this->dimensions;
    }
    //setter dimensions
    public function setDimensions($_dimensions)
    {
        $this->dimensions = $_dimensions;
    }
}
