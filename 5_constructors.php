<?php
class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceCurrency($currencySymbol = "$", int $divisor = 100)
    {
        return $currencySymbol . $this->price / $divisor . "\n";
    }
}

//  PHP_EOL === "\n"
$product = new Product("Soap", 900);
print $product->name . PHP_EOL;  # soap
print $product->price . PHP_EOL; # 900
print $product->priceCurrency(); # 9
