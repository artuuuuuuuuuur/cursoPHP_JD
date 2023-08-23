<?php

    //Cabeçalho
    include "includes/cabecalho.php";
    include "includes/funcoes.php";
    //Fim do Cabeçalho


    // Corpo da página    
    echo "<br>";
    //exibeSoma(2,5);

    echo "<br>";
    exibeSoma(6);

    echo "<br>";
    $variavel = retornaSoma(3,8);
    echo "o retorno da função foi $variavel";

    $variavel2 = retornaSoma(4,8);
    echo "<br>";
    echo "o retorno da função foi $variavel2";
?>