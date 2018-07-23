<?php

$input = 768154;

$splitted = str_split($input);


for ($i = 0 ; $i < strlen($input) ; $i++) {
    
    $zero = strlen($input) - $i ;
    
    echo ((int)$splitted[$i] * pow(10, $zero))."<br>";


}

