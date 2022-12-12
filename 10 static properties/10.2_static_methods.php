<?php

class Connection
{
    private static int $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }

    public static function getCounter(): int
    {
        return self::$counter;
    }
}

print Connection::getCounter(); // 0

$connection = new Connection();
print Connection::getCounter(); // 1
