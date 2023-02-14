<?php
function getFinalValue (int $value)
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70){
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

}

$score =  getFinalValue(10);
var_dump($score);
