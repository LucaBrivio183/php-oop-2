<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Traits/Name.php';

/**
 * Product
 * 
 * define the basic product class
 * 
 * @author Brivio Luca
 * 
 */
class Product
{
    use Name;
    private $image;
    private $price;
    private $category;

    /**
     * Method __construct
     *
     * @param string $_image [explicite description]
     * @param string $_name [explicite description]
     * @param float $_price [explicite description]
     * @param Category $_category [explicite description]
     *
     * @return void
     */
    public function __construct($_image,  $_name, $_price, $_category)
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
