<?php



    require "conetion.php";



    $table = "User";



    $comandosql = "Create table $table";

    //$comandosql = "Drop database $table";

   

    //metódo executa uma consulta no banco de dados, retorna V ou F

    if($conetion->query($comandosql)){

        echo "Base de dados criada com sucesso!";

    }else{

        echo "Erro ao criar base de dados!";

    }



    //ternário

    // echo $conexao->query($comandosql)?"Base de dados criada com sucesso!":"Erro ao criar base de dados!";



    $conexao->close();




?>