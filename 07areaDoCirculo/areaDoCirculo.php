<?php
//Calcule a área de um círculo, dado o raio.
function circleArea(int $ray) {
    $pi = 3.14159;
    $circleArea = $pi * ($ray * $ray);
    $circleArea = round($circleArea, 2);
    echo "A área do círculo é $circleArea\n";
}

circleArea(5);
circleArea(8);