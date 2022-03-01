<?php
    $num1 = 1;
    $num2 = 2;
    $num3 = 3;

    echo($num1 . "<br>" . $num2 . "<br>" . $num3 );

    echo("<br>");

    if ($num1 < $num2 && $num1 < $num3) {
        echo($num1 . " É o menor numero");
    }else if ($num2 < $num1 && $num2 < $num3){
        echo($num2 . " É o menor numero");
    }else {
        echo($num3 . " É o menor numero");
    }
?>