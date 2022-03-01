<?php
    $i = 1;
    $iAtual;
    $iSoma = 0;
    $pAtual;
    $pMulti = 0;
    echo("Multiplicação dos numeros pares e soma dos numeros impares de 0 a 20:");
    echo("<br>");
    echo("<br>");
    while ($i <= 20){
        if( $i % 2 == 0){
            $pAtual = $i;
            $pMulti = $pMulti * $pAtual;
           
        }else{
            $iAtual = $i;
            $iSoma = $iSoma + $iAtual;
             
        }
        $i++;
    }
    echo("A soma dos numeros impares é igual a ". $iSoma . 
    "<br> A multiplicação dos numeros pares é igual a ". $pMulti);
?>