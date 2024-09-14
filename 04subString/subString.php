<?php
//Extraia uma substring de uma string maior.

$str = 'Nosso mundo é bem grande.';
$subStr = mb_substr($str, 6,5);
echo $subStr;
