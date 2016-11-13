<?php

namespace Checkout;

class Item
{
    public function __construct($sku, $price)
    {
        $this->sku = $sku;
        $this->price = $price;
    }

    public function sku()
    {
        return $this->sku;
    }

    public function price()
    {
		return $this->price;
    }
}
