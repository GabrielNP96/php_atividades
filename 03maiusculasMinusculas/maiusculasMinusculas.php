<?php
//Converta uma string para letras maiúsculas e minúsculas.
$word = readline('Digite uma palavra: ');
$wordCapitalLetters = mb_strtoupper($word);
$wordLowerCase = mb_strtolower($word);

echo "$wordCapitalLetters\n$wordLowerCase\n";