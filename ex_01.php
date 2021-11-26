<?php

function rev_epur_str(string $chaine){
    $string = "$chaine";
    $array = explode(" ", $string);
    $rarray = array_reverse($array);
    echo trim($chaine = implode(" ", $rarray));
}
//$chaine = "   hi, i'm here   ";
//rev_epur_str($chaine);