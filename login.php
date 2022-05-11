<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="userName">User Name</label>
            <input type="text" class="form-control" id="userName" name="userName"aria-describedby="User name" placeholder="User name">
            <small id="userName" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="Reneber" value="true">
            <label class="form-check-label" for="Reneber">Reneber me</label>
        </div>
        <button type="submit" class="btn btn-primary">login</button>
        <button type="submit" class="btn btn-primary">register</button>
    </form>
    
</body>
</html>
<?php
   
   if (isset($_POST[''])){
    $userName=$_POST['userName'];
    $password=$_POST['password'];
}

?>