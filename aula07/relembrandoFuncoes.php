<?php

include "../aula06/includes/cabecalho.php";
include "../aula06/includes/funcoes.php";

exibeSoma(5,6);
echo '<br>';
$variavel = retornaSoma(5,7) / retornaSoma(1,1) ;
echo "O retorno da função é: " . $variavel;

echo '<br>';
$variavel2 = retornoMultiplo('Laranja','banana','maçã');
foreach ($variavel2 as $item){
    echo "<br>";
    echo "Item: " . $item;
}


?>