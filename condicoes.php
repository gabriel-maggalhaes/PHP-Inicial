<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
    <h1>Estrutura de Condição <b><i>IF-ELSE</i></b> simples</h1>
    <?php
        $var1 = 23;
        $var2 = 20;
        /*A estrutura de condição IF interpreta-se como "Se" e ELSE como "senão".
          Irá verificar SE a variável 1 será maior que a variável 2. Se sim, irá
          imprimir x, se não vai imprimir y.*/
        if($var1>$var2){
            echo "A variável 1 é maior que a variável 2";//x
        }else{
            echo "A variável 2 é maior que a variável 1";//y
        }
    ?>
    <h1>Estrutura de Condição <b><i>IF-ELSE</i></b> composta</h1>
    <?php
        $nota1 = 8;
        $nota2= 6;
        $media =($nota1+$nota2)/2;
        /*Mesmo caso aqui, a condição do if é: a média ser maior ou igual a 6
          E (!!!) a segunda nota ser maior ou igual a 6. */
        if($media>=6 && $nota2>=6){
            echo "Aprovado com média de ".$media." e segunda nota igual a: ".$nota2;
        }else{
            echo "Reprovado com média de ".$media." e segunda nota igual a: ".$nota2;
        }
    ?>
</body>
</html>