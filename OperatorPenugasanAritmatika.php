<?php

$total = 0;
$fruit = 5000;
$chicken = 10000;
$orangejuice =  5000;

$total = $total + $fruit;
$total = $total + $chicken;
$total += $orangejuice;

echo $total;
echo "\n";

var_dump($total);