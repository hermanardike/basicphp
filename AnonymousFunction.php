<?php

$sayHello =  function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");
$sayHello("budi");

function sayGoodbye(string  $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}


