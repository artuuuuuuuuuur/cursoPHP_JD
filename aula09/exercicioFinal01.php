<?php
  
  $array = [
    'Janeiro', 
    'Fevereiro', 
    'Março', 
    'Abril', 
    'Maio', 
    'Junho', 
    'Julho', 
    'Agsto', 
    'Setembro', 
    'Outubro',
    'Novembro',
    'Dezembro'
  ];
  
  $count = 0;
  
  
  echo '<h1>Exercício Final 01</h1><br><hr>';
  
  
  while($count < count($array)) {
    echo "O elemento $count é: " . $array[$count] . "<br>";
    $count++;
    
    if($count >= count($array)) {
      echo "<br> <br> CHEGA!!!!";
    }
  }


?>