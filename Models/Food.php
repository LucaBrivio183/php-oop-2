<?php

require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct(string $_image, string $_name, float $_price, float $_weight, array $_ingredients)
    {
        parent::__construct($_image, $_name, $_price);
        $this->weight = $_weight;
        $this->ingredients  = $_ingredients;
    }
}
