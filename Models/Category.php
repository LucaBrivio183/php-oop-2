<?php
require_once __DIR__ . '/Traits/name.php';
class Category
{
    use Name;
    private $icon;

    /**
     * Method __construct
     *
     * @param string $_name [explicite description]
     * @param string $_icon [explicite description]
     *
     * @return void
     */
    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
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
