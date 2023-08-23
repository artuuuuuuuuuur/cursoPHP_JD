<?php

$variavel = "Artur";
print( "Meu nome é $variavel <br>");

printf( "Meu nome é %d e o sobrenome é %s <br>",2, ' teste teste');


$str = '   Jefferson Teixeira';
for ($i=0; $i < strlen(trim($str)); $i++){
    print("A letra da vez é " . substr(trim($str),$i,1) . '<br>');
}

$str2 = "Banana,abacaxi,macaúba";
$arrayString = explode(",", $str2);
print_r($arrayString);

?>