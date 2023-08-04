<?php
$variavelGlobal = 0;

function testeDeEscopo(){
    $variavelNormal = 0;
    $variavelNormal = $variavelNormal + 1;  

    echo "Mostrando variável local normal: <br>";
    echo $variavelNormal;
    echo "<br>";
}

testeDeEscopo();
testeDeEscopo();
testeDeEscopo();

function testeDeEscopoStatic( ){
    static $variavelStatic = 0;
    $variavelStatic = $variavelStatic + 1;
    echo "Mostrando variável local static: <br>";
    echo $variavelStatic;
    echo "<br>";
}


testeDeEscopoStatic();
testeDeEscopoStatic();
testeDeEscopoStatic();

?>