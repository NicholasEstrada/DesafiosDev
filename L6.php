<?php

/*
 * Algoritmo que receba um numero e que apartir deste numero construa
 * um array com a sequencia fibonacci e com o numero de elementos sendo o
 * informado
 */

 function fibonacci($number){
    $array[0] = 1;

    for($i=0 ; $i < $number ; $i++){
        if ($i == 0) {
            $array[$i] = 1;
        } elseif ($i == 1) {
            $array[$i] = 1;
        } else {
            $array[$i] = $array[$i - 1] + $array[$i - 2];
        }
        
    }

    print_r($array);

 }


 $test = array(
    3,
    9,
    5,
    6
);

foreach($test as $array){
    $output = fibonacci($array);
    print($output."\n");
}

?>