<?php
    //Se lembra que as variáveis podem aceitar texto? Então, elas são denominadas como "strings".
    $nome = "Gabriel Magalhães";
    $funcao = "Estagiário";
    $empresa = "ServiceDesk Brasil";

    $bio =  "Oi, meu nome é ".$nome." e sou ".$funcao." na empresa ".$empresa."</br>";
    echo $bio;
    //Agora vamos ver algumas funções próprias das variáveis strings.
    echo "Converte tudo em maiúsculo: ".strtoupper($bio)."</br>";
    echo "Converte tudo em minúsculo: ".strtolower($bio)."</br>";
    echo "Retira os espaços do início e final do texto: ".trim("     Aqui está um exemplo     ")."</br>";
    echo "Aqui troca uma palavra por outra ".str_replace("na empresa", "no emprego da", $bio)."</br>";
?>