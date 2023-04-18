<?php

require_once __DIR__ . '/Product.php';
class Accessory extends Product
{
    private $material;
    private $dimensions;

    public function __construct($_image, $_name, $_price, $_category, $_material, $_dimensions)
    {
        parent::__construct($_image, $_name, $_price, $_category);
        $this->material = $_material;
        $this->dimensions  = $_dimensions;
    }
    //getter material
    public function getMaterial()
    {
        return $this->material;
    }
    //setter material
    public function setMaterial($_material)
    {
        $this->material = $_material;
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
