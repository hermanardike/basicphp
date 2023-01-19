<?php
//for ( ; ; ) {
//    echo "Ini adalah for loop" . PHP_EOL;
//}

// FORCOUNTER
$counter = 1;
for ( ; $counter <= 10 ; ) {
    echo "ini adalah for loop ke -$counter" . PHP_EOL;
    $counter++;
}

//Menggunkan IF
for ( $counter = 1; $counter <= 10 ; $counter++ ) {
    echo "ini adalah for loop ke -$counter" . PHP_EOL;

}

for ( $counter = 10; $counter >= 1 ; $counter-- ) {
    echo "ini adalah for loop ke -$counter" . PHP_EOL;

}



// Menggunakan END FOR
for ( $counter = 1; $counter <= 10 ; $counter++ ) :
    echo "ini adalah for loop ke -$counter" . PHP_EOL;
endfor;

for ( $counter = 10; $counter >= 1 ; $counter-- ) :
    echo "ini adalah for loop ke -$counter" . PHP_EOL;
endfor;






