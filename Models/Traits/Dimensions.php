<?php
trait Dimensions
{
    private $dimensions;

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
