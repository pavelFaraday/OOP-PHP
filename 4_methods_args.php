<?php
class Product
{
    public $name = "soap";
    public $price = 800;


    public function priceCurrency($currencySymbol = "$", int $divisor = 100)
    {
        return $currencySymbol . $this->price / $divisor . "\n";
    }
}

$product = new Product();
print $product->priceCurrency(divisor: 200, currencySymbol: "€"); # €4
// @named_arguments allow you to pass input data into a function, based on their argument name instead of the argument order 👆