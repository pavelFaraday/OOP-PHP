<?php

class Connection
{
    public static int $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }
}

$connection = new Connection();
print Connection::$counter; // 1

$connection2 = new Connection();
print Connection::$counter; // 2
