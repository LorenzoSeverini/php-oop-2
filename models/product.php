
<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $type;
    public $icon;
    public $img;

    public function __construct($name, $price, $category, $type, $icon, $img)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->icon = $icon;
        $this->img = $img;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImg()
    {
        return $this->img;
    }
}

?>