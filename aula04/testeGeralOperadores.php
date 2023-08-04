<?php

// TESTE DE CONCATENAÇÃO
  $primeiraString = "Essa variável vai ser ";
  $segundaString = "usada para teste!";
  
  echo $primeiraString . $segundaString;
  echo '<br>';


//TESTE DE INCREMENTO
  $numero = 5;
  echo 'A variável $numero tem o valor :';
  echo $numero;
  echo '<br>';
  $numero++;
  
  echo 'A variavel $número tem o valor incrementado';
  echo $numero;
  echo '<br>';
  
  $numero--;
  echo 'A variavel $número tem o valor incrementado';
  echo $numero;
  echo '<br>';


// TESTE DE IGUALDADE
  echo "Teste de igualdade (5==5): ";
  echo ( 5 == 5 );
  echo '<br>';
  
  echo "Teste de igualdade (5!=5): ";
  echo ( 5 != 5 );
  echo '<br>';

// TESTE COM OPERADORES LÓGICOS
  // TESTE COM AND
    echo "O resultado do teste ( 5 == 5) && ( 10 > 2) é: <br> ";
    echo  ( 5 == 5) && ( 10 > 2);
    echo "<br>";
    
  // TESTE COM OR
    echo "O resultado do teste ( 5 == 6) || ( 10 > 2) é: <br> ";
    echo  ( 5 == 6) || ( 10 > 2);
    echo "<br>";
    
  // TESTE COM NOT
    echo "O resultado do teste !( 5 == 6)  é: <br> ";
    echo  !( 5 == 6) ;
    echo "<br>";

// TESTE COMBINADO
    echo "O resultado do teste ( ( 5 == 6) || (10>2) ) && ('a' == 'a') é: <br> ";
    echo  ( ( 5 == 6) || (10>2) ) && ('a' == 'a') ;
    echo "<br>";
?>