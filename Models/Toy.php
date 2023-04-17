<?php

class Toy extends Product
{
    public $characteristics;
    public $dimensions;

    public function __construct(string $_characteristics, array $_dimensions)
    {
        $this->characteristics = $_characteristics;
        $this->dimensions  = $_dimensions;
    }
}
