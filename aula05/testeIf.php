<?php

  $variavel1 = 5;
  $variavel2 = 4;
  
  // IF COM CONECTOR AND
  if( ($variavel1 >= 5) && ($variavel2 ==3) ) {
    echo 'A variável é maior ou igual a 5! <br>';
  } else {
    echo 'A variável é menor que 5! <br>';
  }
  
  
  // IF COM CONECTOR OR
  if( ($variavel1 >= 5) || ($variavel2 ==3) ) {
    echo 'A variável é maior ou igual a 5! <br>';
  } else {
    echo 'A variável é menor que 5! <br>';
  }
  
  
  // IF COM CONECTOR NOT
  if( ($variavel1 >= 5) && !($variavel2 ==3) ) {
    echo 'A variável é maior ou igual a 5! <br>';
  } else {
    echo 'A variável é menor que 5! <br>';
  }
  
  
  // IF UM POQUINHO MAIS COMPLEXO...
  $variavel3 = 10;
  if( ($variavel1 >= 5) && !($variavel2 == 3) && ($variavel3 == 10)) {
    echo 'A variável é maior ou igual a 5! <br>';
  } else {
    echo 'A variável é menor que 5! <br>';
  }
  
  
  // IF ANINHADO
  if($variavel1 > 4) {
    if($variavel2 > 2) {
      if($variavel3 == 10) {
        echo 'Deu certo o teste de if aninhado <br>';
      } else {
          echo 'A variável3 não é igual a 10 <br>'; 
        }
    } else {
      echo 'Testei o 2º nível e não deu legal <br>';
    }
  } else {
    echo 'Nem passou no primeiro if... <br>';
  }
  
  
   // teste com ELSEIF
   $string = 'Professora';

   if ($string == 'PROFESSOR') {
       echo "A string testada deu certo!!";
   } elseif ($string == 'Professor' ) {
       echo "A string testada agora deu certo nesse teste do elseif !!";
   } else {
       echo 'Nada deu certo...';
   }



?>