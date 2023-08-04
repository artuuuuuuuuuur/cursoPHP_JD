<?php
$variavel1 = '2.5';
// operador de incremento
$variavel1 = $variavel1 + 1;

// operador de decremento
$variavel1--;

$variavel2 = "4.5";

echo 'O tipo da variavel $variavel2 é ' . gettype($variavel2) . '<br>';

$variavel2 = (float)$variavel2;
echo 'O tipo da variavel $variavel2 é ' . gettype($variavel2) . '<br>';

$variavel2 = (int)$variavel2;
echo 'O tipo da variavel $variavel2 é ' . gettype($variavel2) . '<br>';
echo 'O numero agora é: ' ;
echo $variavel2 ;
// Atribuição

echo '<br>';
$variavel2 += 2;
echo 'O numero agora é: ' ;
echo $variavel2 ;

echo '<br>';
$variavel2 -= 3;
echo 'O numero agora é: ' ;
echo $variavel2 ;

?>