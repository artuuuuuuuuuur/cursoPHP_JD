<?php

$variavelInteira = 5;
$variavelResultado = 0;

echo 'O tipo da variavel $variavelResultado é ' . gettype($variavelResultado) . '<br>';
$variavelResultado = $variavelInteira / 2;

echo 'O resultado é: ';
echo $variavelResultado;
echo '<br>';

echo 'O tipo da $variavelResultado é ' . gettype($variavelResultado) . '<br>';

?>