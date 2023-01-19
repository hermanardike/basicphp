<?php
$counter = 1;
while (  $counter <= 10  ) {
    echo "ini adalah for loop ke -$counter" . PHP_EOL;
    $counter++;
}


// BENTUK SINGKAT
$counter = 1;
while (  $counter <= 10  ) :
    echo "ini adalah for loop ke -$counter" . PHP_EOL;
    $counter++;
    endwhile;