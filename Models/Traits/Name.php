<?php
trait Name
{
    private $name;

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
}
