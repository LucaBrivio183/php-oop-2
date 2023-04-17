<?php

class Toy extends Product
{
    public $material;
    public $dimensions;

    public function __construct(string $_material, array $_dimensions)
    {
        $this->material = $_material;
        $this->dimensions  = $_dimensions;
    }
}
