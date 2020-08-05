<?php
require __DIR__ . "/vendor/autoload.php";

// ===== Challenges =====

// 1
echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"

// // make instance
// // call method
// // 2
// echo "\nQuestion 2:\n";
// // 3
// echo "\nQuestion 3:\n";