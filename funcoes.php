<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Documento</title>
</head>
<body>
    <?php
    /*Onde encontrar "function" foi criado funções com determinadas ações,
      na função divisão foi passado dois parâmetros (n1 e n2) e dentro da
      função tem a ação que ela irá fazer, a variável "res" recebe os dois
      parâmetros, soma-os e divide por dois. No final, retorna o resultado 
      que será exibido quando eu chamar a função. Assim é o processo de criação
      da função*/
    function divisao($n1,$n2){
        $res = ($n1+$n2)/2;
        return $res;
    }

    function reproduzir(){
        echo "Oi, eu sou o Gabriel!";
        }
    function soma($n1,$n2){
        $res = $n1+$n2;
        return $res;
    }
    /*Aqui foi chamado todas as funções, nota-se que para as que necessitavam
      de valores foi dado entre parênteses. */
    $div = divisao(10,5);
    echo "Divisão: ${div} </br>";
    $soma = soma(10,5);
    echo "Soma: ${soma} </br>";
    reproduzir();

    ?>

</body>
</html>