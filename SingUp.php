<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Singup</title>
</head>
  <body>
  <form action="SingUp.php" method="POST">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="nome" class="form-control form-control-lg" name="nome" id="nome" placeholder="Seu nome">
      </div>  
    <div class="form-group">
        <label for="Email1">Endereço de email</label>
        <input type="email" class="form-control form-control-lg" id="Email" name="Email" aria-describedby="email" placeholder="Seu email">
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control form-control-lg" id="senha" name="senha" placeholder="senha">
      </div>

    <button type="submit" class="btn btn-primary">SingUp</button>
  </form>    
  </body>
</html>
<!-- editar nomes e identar -->
<?php
  if(isset($_POST[''])){
    $name=$_POST["nome"];
    $password=$_POST["senha"];
    $email=$_POST["email"];
    setcookie("biblioteca", $name, $password, $email);
  }
  


?>