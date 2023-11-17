<?php

/*
 * Algoritmo para encontrar os números faltantes de um array
 */

function SearchNumber($array) {
    $missingNumber = array();

    $min = min($array);
    $max = max($array);

    for ($i = $min; $i < $max; $i++) {
        if (!in_array($i, $array)) {
            $position = array_search($i - 1, $array) + 1;
            $missingNumber[$position] = $i;
            array_splice($array, $position, 0, $i);
        }
    }

    return $missingNumber;
}


$test = array(
    array(1, 2, 3, 6, 7, 8),
    array(10, 12, 13, 15, 16),
    array(12,18,30)
);

foreach($test as $array){
    $output = SearchNumber($array);
    print_r($output);
}

?>
