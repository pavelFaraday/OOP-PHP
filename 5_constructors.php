<?php
class Song
{
    public function __construct(public $name, public $price)
    {
    }

    public function priceCurrency($currencySymbol = "$", int $divisor = 100)
    {
        return $currencySymbol . $this->price / $divisor . "\n";
    }
}

//  PHP_EOL === "\n"
$song = new Song("Soap", 900);
print $song->name . PHP_EOL;  # soap
print $song->price . PHP_EOL; # 900
print $song->priceCurrency(); # 9
