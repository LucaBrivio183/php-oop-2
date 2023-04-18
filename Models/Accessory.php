<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Traits/Dimensions.php';
class Accessory extends Product
{
    use Dimensions;
    private $material;

    /**
     * Method __construct
     *
     * @param string $_image [explicite description]
     * @param string $_name [explicite description]
     * @param float $_price [explicite description]
     * @param Category $_category [explicite description]
     * @param string $_material [explicite description]
     * @param string $_dimensions [explicite description]
     *
     * @return void
     */
    public function __construct($_image, $_name, $_price, $_category, $_material, $_dimensions)
    {
        parent::__construct($_image, $_name, $_price, $_category);
        $this->material = $_material;
        $this->dimensions  = $_dimensions;
    }
    //getter material
    public function getMaterial()
    {
        return $this->material;
    }
    //setter material
    public function setMaterial($_material)
    {
        $this->material = $_material;
    }
}
