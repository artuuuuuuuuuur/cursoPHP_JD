<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $nome = 'Não informado';
    $sobrenome = 'Não informado';
    if(isset($_POST['nome'])) {
      $nome = $_POST['nome'];
    }
    if(isset($_POST['sobrenome'])) {
      $sobrenome = $_Post['sobrenome'];
    }

    
    ?>
    <h1>Nome: <?= $nome ?></h1>
    <h1>Sobrenome: <?= $sobrenome ?></h1>

    <h2>Formulário:</h2>


    <form action='formularioInicial.php' method='GET'>
        <label for="nome">Nome:</label>
        <input type='text' id='nome' name='nome' value='Artur' /><br>
        <label for="sobrenome">Sobrenome:</label>
        <input type='text' id='sobrenome' name='sobrenome' value='de Maria' /><br>
        <input type='submit' name='enviar' value='Enviar' /><br>
    </form>    
</body>
</html>