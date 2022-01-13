<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
    <?php
        /* Na linguagem PHP, se abre e fecha o código com <?php no inicio e "? >" no final (sem esse espaço entre o ponto de interrogação e o maior que)
         Aqui vamos identificar um variável e quais os valores lhe cabem. */
        $nome = "Gabriel Magalhães";
        $idade=18;
        $altura = 1.75;
        /*A variável em PHP é identificada pelo símbolo de cifrão ($) antes do nome dado a ela. Como vemos acima, "nome","idade" e "altura".
          Como foi notado, foram passados diferentes tipos de dados para as variáveis, como texto no nome, número inteiro para idade e
          número "quebrado" para altura. Atenção, por pré-definição da linguagem, o PHP utiliza pontos (.) ao invés de vírgulas (,) para números
          "quebrados".
        */
        echo "Nome: ".$nome."</br>";
        echo "Idade: ".$idade."</br>";
        echo "Altura: ".$altura."</br>";
        /*
          Acima foi feito apenas uma impressão na tela com a função "echo", mostrando como ficou o resultado das variáveis.
          O PHP também suporta alguns outros tipos de dados em suas variáveis. Tais quais veremos abaixo:
        */
        $sim = true;
        $nao = false;
        $null = null;
        $array = [1,2,3,4];
        /*
          As variáveis "sim" e "nao" são do tipo boolean, que já possuem valores pré-definidos. True (verdadeiro) ou False (falso).
          Null é nulo. É uma variável sem valor.
          O array é uma variável espaçosa como eu costumo dizer, nela é como se coubessem diversos dados de diversos tipos. Mas como eu imprimo
          um valor do array? A sintaxe do array é composta por índices, que apontam a posição dos valores, que sempre começam pelo 0. 
          Como no exemplo, o índice de posição 0 tem o valor 1, o índice de posição 1 tem o valor 2, e por aí vai.
        */
        echo "Valores do Array: </br>".$array[0]."</br>".$array[1];

    ?>
    
</body>
</html>