<?php
    $notas = [5,7,9,8,5,7,6,10];
    echo $notas[4];
    echo "</br>";

    echo "Array".print_r($notas); //Essa função torna o array mais compreensível.
    echo "</br>";

    $notas[0] = 8; // Substitui um valor da posição por uma nova posição.
    echo "Array do índice [0]: ".$notas[0];
    echo "</br>";

    $notas[]=9; //Adiciona uma nova posição no array.
    echo "Array".print_r($notas);
    echo "</br>";

    $itens = array(1,"Gabriel",3.4,10); //Aqui se mostra a variedade de itens cabíveis no array.
    echo "Item do índice [1]: ".$itens[1];
    echo "</br>";

    $itensarray = array(2,"Magalhães",array(1,44,32,22));//Nota-se que aqui é possível colocar um array dentro de outro.
    echo "Item do índice [0]: ".$itensarray[0]."</br>";
    echo "Itens dos índices [2][1]: ".$itensarray[2][1]."</br>";
    echo "Itens: ".print_r($itensarray)."</br>";
?>
