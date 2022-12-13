<?php
// Global Constants !both are the same!
define('NAME', 'Giorgi');
const NAME2 = 'John';

print NAME . PHP_EOL; // Giorgi
print NAME2 . PHP_EOL; // John


/* -------------------------------------------------------------------------- */

class Example
{
    const AGE = 21;
    const ERROR = 404;
}

// ! Constants belong to class scope/level, so we can access them directly off the class. No Object Needed !
// ! Difference between STATIC & CONSTANT Values: we can only change static value!
print Example::AGE . PHP_EOL; // 21 
print Example::ERROR . PHP_EOL; // 404
