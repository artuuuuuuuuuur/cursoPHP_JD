<?php

$variavel1 = 'Rua Barao do Rio Branco, 1011';

$variavel2 =& $variavel1;

$variavel3 = $variavel1;

echo 'Conteúdo da $variavel2: ' . $variavel2 . "<br>";
echo 'Conteúdo da $variavel3: ' . $variavel3 . "<br>";

$variavel1 = 'Av. Duque de Caxias, 2030';
echo 'Novo conteúdo: <br>';

echo 'Conteúdo da $variavel2: ' . $variavel2 . '<br>';
echo 'Conteúdo da $variavel3: ' . $variavel3 . '<br>';


?>