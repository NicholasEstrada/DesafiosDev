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
            $posicao = array_search($i - 1, $array) + 1;
            $missingNumber[$posicao] = $i;
        }
    }

    return $missingNumber;
}


$test = array(
    array(1, 2, 3, 6, 7, 8),
    array(10, 12, 13, 15, 16),
    array(12,30)
);

foreach($test as $array){
    $output = SearchNumber($array);
    print_r($output);
}

?>
