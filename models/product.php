
<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $type;
    public $icon;

    public function __construct($name, $price, $category, $type, $icon)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->icon = $icon;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

?>