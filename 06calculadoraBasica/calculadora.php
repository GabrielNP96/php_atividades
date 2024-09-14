<?php

function calculator (float $num1, string $operator, float $num2) {
    if($operator == '+') {
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result\n";
    } elseif($operator == '-') {
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result\n";
    } elseif($operator == '/') {
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $result\n";
    } elseif($operator == '*') {
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result\n";
    } else {
        echo 'Erro algum dos dados é invalido';
    }
}

calculator(1, '+', 4);
calculator(5, '/', 2);
calculator(4, '*', 2);
calculator(8, '-', 1);
