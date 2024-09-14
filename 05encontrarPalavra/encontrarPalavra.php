<?php
//Verifique se uma string contém uma determinada palavra.
$str = 'Olá mundo';
if(mb_strpos($str, 'Olá') !== false) {
    echo 'Palavra encontrada';
}else{
    echo 'Palavra não encontrada';
}