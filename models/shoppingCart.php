<?php

class ShoppingCart
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addItem($product)
    {
        $this->items[] = $product;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function removeItem($index)
    {
        unset($this->items[$index]);
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function purchase()
    {
        $total = $this->getTotal();
        $this->clearCart();
        return "Purchase successful! Total amount: $" . $total;
    }

    public function clearCart()
    {
        $this->items = [];
    }

    public static function loadFromSession()
    {
        if (isset($_SESSION['shoppingCart'])) {
            return unserialize($_SESSION['shoppingCart']);
        } else {
            return new self();
        }
    }

    public function saveToSession()
    {
        $_SESSION['shoppingCart'] = serialize($this);
    }
}
