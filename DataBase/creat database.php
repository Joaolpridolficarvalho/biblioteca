<?php
    require "connetion.php";

    $db="fatec";
    $comandos="creat database $db";
    if($connection->query($comandos)){
        echo "Created database";
    }

?>