<?php
class Product
{
    public $name = "soap";
    public $price = 800;

    public function priceCurrency(string $currencySymbol = "$")
    {
        return $currencySymbol . $this->price / 100 . "\n";
    }
}

$product = new Product();
print $product->priceCurrency("€"); # €8
