<?php
/*Entendemos que SESSION é a transferência de dados já definidos
  entre páginas, como sendo um array, definimos seu "índice" e seu valor
  e solicitamos na nova página seu índice. */
    session_start();

    $_SESSION['nome'] = 'Gabriel';

    echo "<a href='session2.php'>Session 2</a>";
    
?>