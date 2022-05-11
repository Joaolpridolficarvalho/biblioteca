<?php



    if (require_once "connection.php")
        echo "passei aqui";



    $table = "user";



    $comandosql = "Create table $table";

    //$comandosql = "Drop database $table";

   

    //metódo executa uma consulta no banco de dados, retorna V ou F

    if($connection->query($comandosql)){

        echo "tabela criada com sucesso!";

    }else{

        echo "Erro ao criar tabela!";
        

    }
    
    // $table = "livros";



    // $comandosql = "Create table $table";

   

    // if($connection->query($comandosql)){

    //     echo "tabela criada com sucesso!";

    // }else{

    //     echo "Erro ao criar tabela!";
        

    // }






    $connection->close();




?>