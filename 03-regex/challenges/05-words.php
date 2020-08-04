<?php

require __DIR__ . "/vendor/autoload.php";

function words($str){
    $result = preg_split("/[\s,]+/", $str);
    dump($result);
};

dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]