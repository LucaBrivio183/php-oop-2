<?php

class Product
{
    public $image;
    public $name;
    public $price;

    public function  __construct(string $_image, string $_name, float $_price)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
    }
}
