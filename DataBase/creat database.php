<?php
    if (require "connection.php")
        echo "passei aqui";

    $db="fatec";
    $comandos="creat database $db";
    if($connection->query($comandos)){
        echo "Created database";
    }else{
      $connection->close();  
    }
    // concluded

?>