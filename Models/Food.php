<?php

class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct(float $_weight, array $_ingredients)
    {
        $this->weight = $_weight;
        $this->ingredients  = $_ingredients;
    }
}
