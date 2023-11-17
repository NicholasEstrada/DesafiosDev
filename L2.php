<?php

function GetZero($array){
    $result = array();

    $lenght = count($array);

    for ($i = 0; $i < $lenght -2; $i++) {

        $sum = ($array[$i] + $array[$i+1] + $array[$i+2]);

        if( $sum == 0 ){
            $result[] = $array[$i]." + ".$array[$i+1]." + ".$array[$i+2]." = 0";
        }
    }

    return $result;
} 


$test = array(
    array(-1, 0, 1, 2, -1, -4),
    array(-2, 1, 1, 0, -1, -2, 3)
);

foreach($test as $array){
    $output = GetZero($array);
    print_r($output);
}

?>