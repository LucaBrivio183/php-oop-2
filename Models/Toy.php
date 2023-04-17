<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $characteristics;
    public $dimensions;

    public function __construct(string $_image, string $_name, float $_price, string $_characteristics, array $_dimensions)
    {
        parent::__construct($_image, $_name, $_price);
        $this->characteristics = $_characteristics;
        $this->dimensions  = $_dimensions;
    }
}
