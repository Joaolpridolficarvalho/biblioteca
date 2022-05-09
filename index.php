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
            <label for="User name">User Name</label>
            <input type="User name" class="form-control" id="User name" aria-describedby="User name" placeholder="User name">
            <small id="use name" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="Password" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Reneber me</label>
        </div>
        <button type="submit" class="btn btn-primary">login</button>
        <button type="submit" class="btn btn-primary">register</button>
    </form>
    
</body>
</html>
<?php
    if ($_COOKIE(biblioteca[username]))

?>