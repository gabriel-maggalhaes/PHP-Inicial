<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>

    <?php
        /*O "require_once" também pode ser utilizado, a diferença entre eles
          é que o require não verifica se o arquivo já foi incluído ou não,
          o require_once verifica. O include também incluí os arquivos, sendo até
          mais eficaz, já que se o arquivo corromper ou algo relacionado a página
          não trará um erro fatal assim como o require.*/
        require("linkRequire.php");
        $var = soma(8,4);
        echo "A soma é: {$var} </br>";
        $var2 = divisao(8,4);
        echo "A divisão é: {$var2}";
        //E assim vai com as outras operações...
    ?>
    
</body>
</html>