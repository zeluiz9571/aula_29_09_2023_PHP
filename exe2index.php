<?php

//Declaração de variável
    $num1 = 11;
    $num2 = 40.5;
    $nome = "Jãozin";
    $resul = $num2 * 2;


//Vê se $num1 é um número e se for ele faz a conta
if(is_string($num1)) {
    echo "Iste item é um nome";
} else {
    $resul = $num1 * 2;
} 

//Verifica se o $resul é maior que 100
if ($resul >= 100) {
    echo "Esse numero é maior que 100!";
} else {
    echo "Esse numero não é maior que 100!";
}


?>