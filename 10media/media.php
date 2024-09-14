<?php
//Calcule a média de três notas.

function averageOfThree(float $num1, float $num2, float $num3) {
    $sum = $num1 + $num2 + $num3;
    $average = $sum / 3;
    $average = round($average, 2);

    echo "A Média é $average\n";
}

averageOfThree(3,8,9);
averageOfThree(7.8,5.9,9.9);