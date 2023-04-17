<?php

require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct(string $_image, string $_name, float $_price, Category $_category_name, float $_weight, array $_ingredients)
    {
        parent::__construct($_image, $_name, $_price, $_category_name);
        $this->weight = $_weight;
        $this->ingredients  = $_ingredients;
    }
}
