<?php

require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $weight;
    public $ingredients;

    /**
     * Method __construct
     *
     * @param string $_image [explicite description]
     * @param string $_name [explicite description]
     * @param float $_price [explicite description]
     * @param Category $_category [explicite description]
     * @param float $_weight [explicite description]
     * @param string $_ingredients [explicite description]
     *
     * @return void
     */
    public function __construct($_image,  $_name,  $_price, $_category, $_weight, $_ingredients)
    {
        parent::__construct($_image, $_name, $_price, $_category);
        $this->weight = $_weight;
        $this->ingredients  = $_ingredients;
    }
    //getter weight
    public function getWeight()
    {
        return $this->weight;
    }
    //setter weight
    public function setWeight($_weight)
    {
        $this->weight = $_weight;
    }
    //getter ingredients
    public function getIngredients()
    {
        return $this->ingredients;
    }
    //setter ingredients
    public function setingredients($_ingredients)
    {
        $this->ingredients = $_ingredients;
    }
}
