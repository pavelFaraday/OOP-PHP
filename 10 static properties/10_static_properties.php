<?php
class Counter
{
    public static int $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }
}

Counter::$counter++;
Counter::$counter++;
Counter::$counter++;

print Counter::$counter; // 3
