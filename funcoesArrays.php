<?php
    $notas = [0,1,2,3,4,5,6,7,8,9,10];
    echo print_r($notas);
    echo "</br>";
    echo max($notas)." é a maior nota";
    echo "</br>";
    echo min($notas)." é a menor nota";
    echo "</br>";
    echo count($notas)." é o total de notas que temos";
    echo "</br>";
    echo sort($notas)." organiza por ordem crescente nos índices";
    echo "</br>";
    echo print_r($notas);
    echo "</br>";
    echo rsort($notas)." organiza por ordem decrescente nos índices";;
    echo "</br>";
    echo print_r($notas);
    echo "</br>";
    echo in_array(15, $notas);//Verifica se o 15 está no array, não retorna nada pois é falso. Associações: false = 0.
    echo "</br>";
    echo in_array(8, $notas);//Verifica se o 8 está no array, retorna 1 pois é verdadeiro. Associações: true = 1;
?>