<?php
    require 'include/function.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
    if(isset($_SESSION['userUid'])){
        if($_SESSION['admin'] == true){
            console_log("admin");
        ?>
        <header>
            <nav class="admin">
            <a href="#">CMS</a>
            <a href="#">Projet</a>
            <a href="client-manager.php">Gérer Client</a>
            <a href="#">Gérer Admin</a>
            <a href="#"><?=$_SESSION['username']?></a>
            </nav>
        </header>
        <?php
        }else  console_log("client");
    }
        require 'header.html';
    ?>
    <iframe class="feed" width="600" height="700" src="https://rss.app/embed/v1/zjz7nySMNJmVPZ7t" frameBorder="0"></iframe>
</body>
</html>