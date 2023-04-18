<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Traits/Dimensions.php';

class Toy extends Product
{
    use Dimensions;
    private $characteristics;

    /**
     * Method __construct
     *
     * @param string $_image [explicite description]
     * @param string $_name [explicite description]
     * @param float $_price [explicite description]
     * @param Category $_category [explicite description]
     * @param string $_characteristics [explicite description]
     * @param string $_dimensions [explicite description]
     *
     * @return void
     */
    public function __construct($_image, $_name, $_price, $_category, $_characteristics, $_dimensions)
    {
        parent::__construct($_image, $_name, $_price, $_category);
        $this->characteristics = $_characteristics;
        $this->dimensions  = $_dimensions;
    }
    //getter charateristics
    public function getCharacteristics()
    {
        return $this->characteristics;
    }
    //setter charateristics
    public function setCharacteristics($_characteristics)
    {
        $this->characteristics = $_characteristics;
    }
    //getter dimensions
    public function getDimensions()
    {
        return $this->dimensions;
    }
    //setter dimensions
    public function setDimensions($_dimensions)
    {
        $this->dimensions = $_dimensions;
    }
}
