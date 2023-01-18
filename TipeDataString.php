<?php
echo 'name : ';
echo 'Nyoman  Herman Ardike';
echo "\n";

echo "name : ";
echo "Nyoman\t Herman\t Khannedy\t";
echo "\n";

// Multiline String
//HereDoc
echo <<<herman
ini adalah congoh string yang sangant panjang 
namun dalam dan juga gk perlu ngetiik secara manual, "bisa Quote"
herman;

//NOWDOC
echo "\n";
echo <<<'herman'
ini adalah congoh string yang sangant panjang 
namun dalam dan juga gk perlu ngetiik secara manual, "bisa Quote"

herman;
