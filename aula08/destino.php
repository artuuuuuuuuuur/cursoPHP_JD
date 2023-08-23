<?php

if(isset($_GET['nome'])) {
  $nome = $_GET['nome'];
  $sobrenome = $_GET['sobrenome'];
} else {
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
}

echo 'Nome informado: ' . $nome . '<br>';
echo 'Sobrenome informado: ' . $sobrenome . '<br>';


?>