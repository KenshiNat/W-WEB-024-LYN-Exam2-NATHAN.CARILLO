<?php

function min_len_array(array $array){
    $min = min($array);
    echo $array[min(array_keys($array))];
}
//$array = array(1 =>"1", 1 => "2", 1 => "3", 1 => "4");
//min_len_array($array);