<?php 

//Declaração de variáveis

$numero = 5;
$nome = "";

//Lê a variável 
switch ($numero) {
    
    //Compara a variável
    case 4:
    echo "O número é igua a 4 <br>";
    break;
    //Compara a variável 
    case 5:
        echo "O número é igual a 5 <br>";
        break;
        //Valor nulo
        default:
        echo "O número não corresponde aos valores <br>";
}

//Lê a variável
switch($nome) {

    //Compara a variável
    case "Rosana":
        echo "O nome é Rosana";
        break;
    
    //Compara a variável
    case "Isis":
        echo "O nome dela é Isis";
        break;

    //Valor nulo 
    default:
    echo "O nome não foi encontrado";
}

?>