<?php

class Toy extends Product
{
    public function __construct($name, $price, $category, $type, $icon, $img)
    {
        parent::__construct($name, $price, $category, $type, $icon, $img);
    }
}
