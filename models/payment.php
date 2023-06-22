<?php 

class CardForPayment 
{

    public $name;
    public $number;
    public $expiration;
    public $cvv;

    public function __construct($name, $number, $expiration, $cvv)
    {
        $this->name = $name;
        $this->number = $number;
        $this->expiration = $expiration;
        $this->cvv = $cvv;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function getCvv()
    {
        return $this->cvv;
    }
}
