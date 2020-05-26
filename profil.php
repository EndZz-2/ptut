<?php
    require 'include/function.inc.php';
    require 'include/dbcon.inc.php';
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: ./');
        exit();
    }

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in) | Profil</title>   
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>
    <form action="include/login.inc.php" method="POST">
        <h1>Login</h1>
        <input type="text" placeholder="Nom d'Utilisateur" name="user" autocomplete="off" required>
        <input type="password" placeholder="Password" name="pass" autocomplete="off" required>
        <input name="login" class="btn" type="submit" value="SEND">
    </form>
    
</body>
</html>