<?php

$variavelGlobal = 'GLOBAL!!!';

echo "O conteúdo da variavelGlobal é $variavelGlobal <br>";

function testeDeFuncao() {
  $variavelGlobal = 'NOVA VARIAVEL GLOBAL!!!';
  echo "Aqui é o teste de função.";
  echo "bla bla bla";
  echo "O conteúdo da variavelGlobal é: $variavelGlobal <br>";

}
function testeDeFuncaoParametro( $parametroDaFuncao ) {
  $variavelGlobal = $parametroDaFuncao;
  echo "Aqui é o teste de função.";
  echo "bla bla bla";
  echo "O conteúdo da variavelGlobal é: $variavelGlobal <br>";

}

testeDeFuncao();
testeDeFuncaoParametro('Conteudo de Teste');

echo "<br>";
echo "O conteúdo da variavelGlobal é $variavelGlobal <br>"

?>