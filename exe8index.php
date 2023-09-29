<?php
//Definir varáveis 
    $a1 = 10;
    $a2 = 20;
    $for = array([]);
//For(vai ser como c fosse a transferencia do caminho feito do 10 ao 20);
    for($i = $a1; $i <= $a2; $i ++){
//Os valores aqui seram encaminhados para a array como um acrescimo para a variável
        $for [] = $i;
//Aqui os valores seram divididos e se sua divisão por dois tiver resto sera impar e sera printado na tela
        if($i % 2 == 1){
            echo $i. " ";
    }
}
?>