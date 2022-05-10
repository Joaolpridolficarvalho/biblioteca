<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $db = '';

    $connection = new mysqli($host, $usuario, $senha, $db);

    if($connection ->connect_errno){
        die ("Erro: $connection->connect_errno");
    }
    else{
        echo "ok";
    }

?>
<!-- // concluded -->