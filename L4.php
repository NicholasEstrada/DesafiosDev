<?php

/*
 * Algoritmo para encontrar um único número de um array que não se
 * repita duas vezes
 */

 function ShowNotRepeat($array){

    $result = null;

    for( $i = 0 ; $i < count($array) ; $i++ ) {
        $repetido = false;

        for( $j = 0 ; $j < count($array) ; $j++ ) {
            if ($i != $j && $array[$i] == $array[$j]) {
                $repetido = true;
                break;
            }
        }   

        if (!$repetido) {
            $result = "Single Number: ".$array[$i];
            break;
        }
    }

    return $result;
 }

 $test = array(
    array(2, 7, 7, 1, 8, 2, 7, 8, 7),
    array(5, 3, 4, 3, 5, 5, 3)
);

foreach($test as $array){
    $output = ShowNotRepeat($array);
    print_r($array);
    print($output."\n");
}

?>