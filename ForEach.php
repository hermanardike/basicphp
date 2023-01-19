<?php
$names = ["nyoman", "herman", "ardike"];
//
//for ($i = 0; $i < count($names); $i++) {
//    echo "Data ke $i = $names[$i]" . PHP_EOL;
//}

// KODE FOR Each

//foreach ( $names as $name) {
//    echo "Data $name" . PHP_EOL;
//}


$person = [
    "first_name" => "nyoman",
    "mid_name" => "herman",
    "last_name" => "ardike",
];


// Untuk Membutuhkan INDex
foreach ($person as $key => $value) {
    echo "$key : $value" .PHP_EOL;
}

// Tanpa Index
foreach ($person as $key ) {
    echo "$key" .PHP_EOL;
}
