<?php

$membrosDaFamilia = ['Artur', 'Maria', 'Ana', 'João'];
$dados = [
  'nome' => $membrosDaFamilia[0], 
  'endereco' => 'Rua dos Alfeneiros, 4',
  'email' => 'arturdemaria7@gmail.com'  
];

function mostrarEndereco( $endereco ) {
  echo $endereco;
}


echo '<h1>Exercício Aula 03</h1> <hr>';
echo '<h2>Array com membros da família:</h2>';
echo "1: $membrosDaFamilia[0] <br>";
echo "2: $membrosDaFamilia[1] <br>";
echo "3: $membrosDaFamilia[2] <br>";
echo "4: $membrosDaFamilia[3] <br>";

echo '<h2>Array associativa com dados:</h2>';
echo "Nome: " . $dados['nome'] . "<br>";
echo "Endereço: " . $dados['endereco'] . "<br>";
echo "E-mail: " . $dados['email'] . "<br>";

echo '<h2>Endereço:</h2>';
mostrarEndereco($dados['endereco']);


?>




