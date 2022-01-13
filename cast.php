<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Documento</title>
</head>
<body>
    Variável 1 é: 
    <?php
        $var1 = "Hoje o dia está ensolarado. :D";
        echo gettype($var1);
    ?>
    <br>
    Variável 1 é: 
    <?php
        $var1 = $var1+5;
        echo gettype($var1);
        //Foi tentado uma soma de um valor tipo string com um valor tipo inteiro, o que não é possível.
    ?>
    <br>

    Variável 2 é:
    <?php
        $var2 = (string)$var1;
        echo gettype($var2);
        //O tipo da variável foi setado agora para string, sendo armazenado em uma nova variável agora.
    ?>
    <br>
    Variável 3 é:
    <?php
        $var3 = (integer)$var2;
        echo gettype($var3);
        //E por fim, o valor do tipo string na variável 2 agora foi passado para inteiro na variável 3.
    ?>
</body>
</html>