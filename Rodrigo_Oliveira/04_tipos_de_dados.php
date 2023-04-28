<?php 

/********** Escalares **********/
// string
$nome = "ola mundo";
var_dump($nome);
if(is_string($nome)):
    echo "é uma string";
else:
    echo "nao é string";
endif;
echo "<hr>";
// int

$idade = 21 ;
var_dump($idade);
if (is_int($idade)):
    echo "é um inteiro";
else:
    echo " não é inteiro";
endif;
echo "<hr>";
