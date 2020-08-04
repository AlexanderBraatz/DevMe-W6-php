<?php


require __DIR__ . "/vendor/autoload.php";


//Create a function, threeOs, that returns true if a string contains three or more o or O characters in a row.


function threeOs($str){
    return preg_match("/o{3,}/i", $str) === 1 ;    
}

dump(threeOs("Hello")); // false
dump(threeOs("Helloo")); // false
dump(threeOs("Hellooo")); // true
dump(threeOs("HelloOoOo")); // true