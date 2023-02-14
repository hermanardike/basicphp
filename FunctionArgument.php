<?php
function sayHello($name , $lastname)
{
    echo "Hello $name $lastname" .  PHP_EOL;
}

sayHello("Nyoman", "Herman");


function sum($first, $last)
{
        $total = $first + $last;
        echo "Total $first + $last = $total"  . PHP_EOL;
}
sum(100,100);