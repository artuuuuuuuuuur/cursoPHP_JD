<?php
    $metodo = $_SERVER['REQUEST_METHOD'];

    print('Variável SERVER: <br>');
    print_r($_SERVER);

    print('Variável ENV: <br>');

    print_r($_ENV);
    
    echo '<br>  Método: ' . $metodo ;

?>