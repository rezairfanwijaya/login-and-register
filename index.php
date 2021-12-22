<?php 

// cek session
require_once 'session.php';

// check if the logout button is clicked
if (isset($_POST["logout"])){
    require_once 'logout.php';
}




?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <form action="" method="POST">
        <button type="submit" name="logout" >Logout</button>
    </form>

    </body>
</html>