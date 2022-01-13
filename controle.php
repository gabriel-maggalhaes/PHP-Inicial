<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
    <h1>Central de controle</h1>
    <br>
    <h1>Resultado do Método POST</h1>
    <br>
    <!--Aqui vemos que o método POST foi usado para pegar os dados
        junto ao nome dado ao input na primeira página.-->
    Olá <?php echo $_POST['usuario'] ?> <br>
    Sua senha é: <?php echo $_POST['senha'] ?>

</body>
</html>