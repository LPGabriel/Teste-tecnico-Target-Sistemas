<?php

function countLetterA($string) {
    
    $string = strtolower($string);
    
    
    $count = substr_count($string, 'a');
    
    return $count;
}

$string = readline("Digite uma string: ");

$count = countLetterA($string);

if ($count > 0) {
    echo "A letra 'a' (ou 'A') aparece $count vez(es) na string.\n";
} else {
    echo "A letra 'a' (ou 'A') não aparece na string.\n";
}

?>