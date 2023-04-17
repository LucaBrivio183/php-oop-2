<?php

class Category
{
    public $category_name;

    public function __construct(string $_category_name)
    {
        $this->category_name = $_category_name;
    }
}
