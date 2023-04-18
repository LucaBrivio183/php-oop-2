<?php

class Category
{
    private $name;
    private $icon;

    public function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
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
    //getter icon
    public function getIcon()
    {
        return $this->icon;
    }
    //setter icon
    public function setIcon($_icon)
    {
        $this->icon = $_icon;
    }
}
