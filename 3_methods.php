<?php
class Product
{
    public $name = 'soap';
    public $price; #cents

    public function priceCurrency(): int
    {
        return $this->price / 100;
    }
}

$soap = new Product();
$soap->price = 500;
var_dump($soap->priceCurrency()) . "\n";
