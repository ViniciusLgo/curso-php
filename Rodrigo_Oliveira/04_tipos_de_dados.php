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

//float
$dolares = 12.8;
var_dump($dolares);
if(is_float($dolares)):
    echo" é um float";
else:
    echo "não é um float";
endif;
echo "<hr>";

//bolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo" é um admin";
else:
    echo "não é um admin";
endif;
echo "<hr>";

// ***************** COMPOSTOS ******** //

//array
$carros = array("gol","uno","camaro",12,20.6,true);
var_dump($carros);
echo "<hr>";

//object
class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente -> atribuirNome("Rodrigo");
var_dump($cliente);
if(is_object($cliente)):
    echo" é um objeto";
else:
    echo "não é um objeto";
endif;
echo "<hr>";

// ***************** Especiais ******** //

//NULL

$cidade = null;
var_dump($cidade);

//resource