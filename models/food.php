<?php

class Food extends Product
{
    public function __construct($name, $price, $category, $type, $icon)
    {
        parent::__construct($name, $price, $category, $type, $icon);
    }
}
