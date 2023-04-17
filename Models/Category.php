<?php

class Category
{
    public $animal_type;

    public function __construct(string $_animal_type)
    {
        $this->animal_type = $_animal_type;
    }
}
