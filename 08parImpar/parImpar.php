<?php
//Verifique se um número é par ou ímpar. 
function evenOrOdd(int $number) {
    if($number % 2 == 0) {
        echo "$number é par.\n";
    } else {
        echo "$number é ímpar\n";
    }
}

evenOrOdd(2);
evenOrOdd(5);