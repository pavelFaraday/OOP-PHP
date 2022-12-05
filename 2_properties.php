<?php 
class Product 
{
    public $name = 'soap';
    public $price = 14;
}

$soapObject = new Product();
print $soapObject->name . "\n";  // soap
print $soapObject->price . "\n"; // 14
$soapObject->price = 15.99;
print $soapObject->price . "\n"; //  15.99


?>