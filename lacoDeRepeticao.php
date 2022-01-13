<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
    <h1>FOR</h1>
    <?php
        $i = 1;
        for($i; $i<=10; $i++){
            /*A estrutura FOR é um tipo de laço de repetição, nesse exemplo
              a variável i que vale 1, enquanto for MENOR OU IGUAL a 10 será
              adicionado seu valor + 1. */
            echo "<li> O contador está em: {$i}</li>";
        }
        
    ?>
        <h1>WHILE</h1>
    <?php
        $n = 2;
        while($n<=50){
            /*O WHILE também é um laço de repetição, funciona quase do mesmo jeito
              que o FOR. */
            echo "<li>O contador está em: {$n}</li>";
            $n+=2;
        }
    ?>
</body>
</html>