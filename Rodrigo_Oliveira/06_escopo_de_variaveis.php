<?php 

// ESCOPO GLOBAL
$nome = "Vinicius lago";
$a = 1;
$b = 3;
$c = 7;
function exibeNome(){
    global $nome;
echo $nome;;
}
exibeNome();
echo "<hr>";

/////////////////////////////////

function exibeCidade(){
    //ESCOPO LOCAL
    global $cidade;
    $cidade = "RIO DE JANEIRO";
}

exibeCidade();
echo $cidade;
echo "<hr>";

/////////////////////////////////

function soma(){
echo $GLOBALS["a"] + $GLOBALS["b"] + $GLOBALS["c"];

}
soma();



?>