<?php
    $base = 2;
    $expo = 3;
    $i = 2;
    $potencia;
    echo("base = ".$base. "<br> Expoente = ". $expo . "<br>");
    

    if($expo == 0){
        $potencia = 1;
        echo($base. " Elevado a ". $expo . " = " . $potencia );
    }else{
        $potencia = $base;
        while ($i <= $expo){
            $potencia = $potencia * $base;
            $i++;
        }
        echo($base. " Elevado a ". $expo . " = " . $potencia );
    }

?>