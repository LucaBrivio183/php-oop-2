<?php
require_once __DIR__ . '/Category.php';
class Product
{
    private $image;
    private $name;
    private $price;
    private $category;

    public function  __construct($_image,  $_name, $_price, $_category)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }
    //getter img
    public function getImage()
    {
        return $this->image;
    }
    //setter img
    public function setImage($_image)
    {
        $this->image = $_image;
    }
    //getter name
    public function getName()
    {
        return $this->name;
    }
    //setter name
    public function setName($_name)
    {
        $this->name = $_name;
    }
    //getter price
    public function getPrice()
    {
        return $this->price;
    }
    //setter price
    public function setPrice($_price)
    {
        $this->price = $_price;
    }
    //getter Category
    public function getCategory()
    {
        return $this->category;
    }
    //setter Category
    public function setCategory($_category)
    {
        $this->category = $_category;
    }
}
