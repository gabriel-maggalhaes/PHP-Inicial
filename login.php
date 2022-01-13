<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
<form action="controle.php" method='POST'>
    <!-- "Action" redireciona os dados para a página nomeada
          e esses dados vão pelo método "POST".-->
    Usuário: <input type="text" name="usuario">
    <br>
    Senha: <input type="password" name="senha">
    <!--Cada input (campos de preenchimento de dados) tem que receber
        seu tipo e seu nome de identificação, veremos que seu nome será
        importante para recebermos os dados na outra página.-->
    <br>
    <input type="submit" value="Enviar" name='btnEnviar'>
</form>
    
</body>
</html>