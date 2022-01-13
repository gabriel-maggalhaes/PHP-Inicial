<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nulo</title>
</head>
<body>
    <h1>Sobre <b>NULOS</b></h1>
    <?php
        $var1 = "Gabriel";
        $var2 = 10;
        $var3 = null;
    ?>
    Variável 1 é nulo? <?php echo is_null($var1); ?><br/>
    Variável 2 é nulo? <?php echo is_null($var2); ?><br/>
    Variável 3 é nulo? <?php echo is_null($var3); ?><br/>
    Variável 4 é nulo? <?php echo is_null($var4); ?><br/>
    Variável 1 tem valor? <?php echo isset($var1) ; ?> <br/>
    Variável 2 tem valor? <?php echo isset($var2) ; ?> <br/>
    Variável 3 tem valor? <?php echo isset($var3) ; ?> <br/>
    Variável 4 tem valor? <?php echo isset($var4) ; ?> <br/>
    <!--Nota-se que a variável 4 não foi definida. Por isso é retornado que ela é nula e não tem valor.-->
     
</body>
</html>