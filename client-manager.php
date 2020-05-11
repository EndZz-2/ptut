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
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">
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
            <a class="active" href="">Gérer Client</a>
            <a href="#">Gérer Admin</a>
            <a href="#"><?=$_SESSION['username']?></a>
        </nav>
    </header>
    <?php
        }else  console_log("client");
    }
        require 'header.html';
    ?>
    <div class="content">
        <div id="db"></div>
        <form class="form-add">
            <div class="group">
                <input type="text" name="email" id="mail" autocomplete="off" required>
                <label for="email">Email</label>
            </div>
            <div class="group">
                <input type="text" name="username" id="Uname" autocomplete="off" required>
                <label for="username">Username</label>
            </div>
            <input type="button" id="send" value="Envoyer">
        </div>
    </form>
    <script src="js/addclient.js"></script>
</body>

</html>