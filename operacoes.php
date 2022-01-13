<?php
    $n1 = 5;
    $n2 = 10;
    //Aqui está alguns sinais básicos da matemática, onde conforme forem colocados irão realizar a conta exigida.
    echo "Soma: ".($n1+$n2)."</br>";
    echo "Subtração: ".($n1-$n2)."</br>";
    echo "Multiplicação: ".($n1*$n2)."</br>";
    echo "Divisão: ".($n1/$n2)."</br>";
    //Porém não acaba por aqui, ainda há alguns operadores para ver, vamos lá:
    echo "N1: ".$n1."</br>";
    $n1+=10; //Aqui se adiciona o valor da variável + 10. É como se fosse sobrescrevido o valor da variável assim: $n1 = $n1+10.
    echo "Agora N1 vale: ".$n1."</br>";
    $n1++; //Aqui se adiciona o valor da variável + 1. É como se fosse sobrescrevido o valor da variável assim: $n1 = $n1+1.
    echo "Agora N1 vale: ".$n1."</br>";
    $n1-=10; //Aqui se subtrai o valor da variável - 10. É como se fosse sobrescrevido o valor da variável assim: $n1 = $n1-10.
    echo "Agora N1 vale: ".$n1."</br>";
    $n1--; //Aqui se subtrai o valor da variável - 1. É como se fosse sobrescrevido o valor da variável assim: $n1 = $n1-1.
    echo "Agora N1 vale: ".$n1."</br>";
?>