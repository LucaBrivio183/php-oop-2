<?php
require_once __DIR__ . '/Category.php';
class Product
{
    public $image;
    public $name;
    public $price;
    public $category_name;

    public function  __construct(string $_image, string $_name, float $_price, Category $_category_name)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
        $this->category_name = $_category_name;
    }
}
