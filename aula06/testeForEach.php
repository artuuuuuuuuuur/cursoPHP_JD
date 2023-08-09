<?php

$array = ['Jefferson', 'João', 'Marta', 'Marcus'];

$array2 = ['Jefferson', 1, 'João', 2, 'Marta', 3, 'Marcus'];

$y = 0;

while ( $y < count($array2) ) {
  if (gettype($array2[$y])=='string') {
    echo " $array2[$y] <br>";
  }
  $y++;
}

echo '<br> <br>';

for ($i = 0 ; $i < count($array) ; $i++){
  echo "O elemento atual é o $array[$i] <br>";
}

echo '<br> <br>';


echo "agora com o foreach....<br>";
foreach($array as $x){
  echo "O elemento atual é o $x <br>";
}

echo '<br> <br>';

echo "agora com o do/while....<br>";

$contador = 0;
do {
  echo "O elemento atual é o $array[$contador] <br>";
  $contador++;
} while ($contador < 4)



?>
