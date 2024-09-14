<?php
//Crie uma variável string e atribua a ela uma palavra. Exiba o comprimento da string.

$word = readline('Digite uma palavra: ');
$wordSize = mb_strlen($word);
echo "O tamanho de $word é $wordSize letras.\n";