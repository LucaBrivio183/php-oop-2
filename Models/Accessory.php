<?php

require_once __DIR__ . '/Product.php';
class Accessory extends Product
{
    public $material;
    public $dimensions;

    public function __construct(string $_image, string $_name, float $_price, Category $_category_name, string $_material, array $_dimensions)
    {
        parent::__construct($_image, $_name, $_price, $_category_name);
        $this->material = $_material;
        $this->dimensions  = $_dimensions;
    }
}
