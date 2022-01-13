<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Documento</title>
</head>
<body>

<?php
    /*Aqui novamente criamos uma função onde ela recebe um array
      com operações em suas posições. */
    function operacoes($n1,$n2){
        $array = array();
        $array[]=$n1+$n2;
        $array[]=$n1-$n2;
        $array[]=$n1*$n2;
        $array[]=$n1/$n2;
        return $array;
    }
    /*Agora com a função chamada, mostramos o resultado de cada posição
      com  seu respectivo resultado.*/
    $resultados = operacoes(3,7);
    echo print_r($resultados);
    echo "</br> Soma: ".$resultados[0];
    echo "</br> Subtração: ".$resultados[1];
    echo "</br> Multiplicação: ".$resultados[2];
    echo "</br> Divisão: ".$resultados[3];
?>
    
</body>
</html>