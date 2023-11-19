<?php

/*
 * Algoritmo para encontrar três números consecutivos de um array que
 * somados o resultado é igual a um outro número fornecido
 */

function SumCase($array){
    $result = array();

    $lenght = count($array[0]);

    for ($i = 0; $i < $lenght -2; $i++) {

        $sum = ($array[0][$i] + $array[0][$i+1] + $array[0][$i+2]);

        if( $sum == $array[1] ){
            $result[] = $array[0][$i]." + ".$array[0][$i+1]." + ".$array[0][$i+2]." = ".$array[1];
        }
    }

    return $result;
}


$test = array(
    array(array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16),
    array(array(2, 8, 6, 7, 5, 3, 7, 6, 9), 16)
);

foreach($test as $array){
    $output = SumCase($array);
    print_r($output);
}

 ?>