<?php

$variavel = 1;

while($variavel <= 10) {
  echo 'O valor da $variavel é: ' . $variavel . '<br>';
  if($variavel > 2) {
    break;
  }
  $variavel++;
}

echo 'fim do loop!';
?>