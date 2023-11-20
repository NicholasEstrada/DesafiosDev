<?php

/*
 * Algoritmo para encontrar um único número de um array onde cada
 * número repete três vezes, exceto um
 */

 function NotRepeatThree($array){
    $validator = array();

    for($i = 0 ; $i < count($array) ; $i++ ){
        $validatorNumber = $array[$i];

        if( isset($validator[$validatorNumber]) ){
            $validator[$validatorNumber]++;
        }else{
            $validator[$validatorNumber] = 1;
        }
    }


    foreach($validator as $number => $occurrences){
        if ($occurrences !== 3){
            return "Single Number: ".$number;
        }
    }
    
    return null;
 }


 $test = array(
    array(2, 7, 7, 1, 8, 2, 7, 8, 7),
    array(5, 3, 4, 3, 5, 5, 3),
    array(5, 3, 4, 3, 4),
    array(5, 3, 4, 3, 5, 5, 3)
);

foreach($test as $array){
    $output = NotRepeatThree($array);
    print_r($array);
    print($output."\n");
}


?>