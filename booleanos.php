<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
    <?php
        $temPai = true;
        echo is_bool($temPai);
        echo "</br>";
        /*Foi dado o valor verdadeiro para a variável, logo depois foi verificado na função se era verdade ou não. Retornou que sim. */
        $float = 3.42157942;
        echo is_float($float);
        echo "</br>"
        /*Foi dado o valor para a variável, logo depois foi verificado na função se era verdade ou não. Como era, retornou que sim. */
    ?>
    
</body>
</html>