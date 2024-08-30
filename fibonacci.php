<?php

function isPerfectSquare($x) {
    $s = sqrt($x);
    return $s == intval($s);
}

function isFibonacci($n) {
    if ($n < 0) {
        return false;
    }
   
    return isPerfectSquare(5 * $n * $n + 4) || isPerfectSquare(5 * $n * $n - 4);
}

$number = (int)readline("Informe um número: ");

if (isFibonacci($number)) {
    echo "O número $number pertence à sequência de Fibonacci.\n";
} else {
    echo "O número $number não pertence à sequência de Fibonacci.\n";
}

?>