<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício Final 2</title>
</head>
<body>
  <h1>Exercício Final 02</h1>
  <br> <hr>
  
  
  
  <form action="exercicioFinal02.php" method="POST">
    <label for="nome">Nome</label>
    <input type="text" id='nome' name="nome"><br>
    <label for="nome">Endereço</label>
    <input type="text" id='endereco' name="endereco"><br>
    <label for="nome">Cidade</label>
    <input type="text" id='cidade' name="cidade"><br>
    <label for="nome">Bairro</label>
    <input type="text" id='bairro' name="bairro"><br>
    <label for="nome">CEP</label>
    <input type="text" id='cep' name="cep"><br>
    <input type="submit" value="Enviar" title="enviar">
  </form>
  
  <hr>
  
  <?php
    $nome = 'Vazio.';
    $endereco = 'Vazio.';
    $cidade= 'Vazio.';
    $bairro = 'Vazio.';
    $cep = 'Vazio.';
    
    if(isset($_POST['nome'])) {
      $nome =  $_POST['nome'];
      $endereco = $_POST['endereco'];
      $cidade = $_POST['cidade'];
      $bairro = $_POST['bairro'];
      $cep = $_POST['cep'];
    }
  ?>
  
  <h4>Nome: <?= $nome ?></h4>
  <h4>Endereço: <?= $endereco ?></h4>
  <h4>Cidade: <?= $cidade ?></h4>
  <h4>Bairro: <?= $bairro ?></h4>
  <h4>CEP: <?= $cep ?></h4>
  
</body>
</html>