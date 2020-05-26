<?php
    session_start();
    if(!isset($_SESSION['admin']) == 1){
        header('location: ./');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in) | Client-manager</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">
</head>

<body>
    <?php
    require 'header.php';
    ?>
    <div class="confirm-modal modal">
        <div class="modal-content js-modal">
            <div class="modal-icon">
                <i id="icon" class="fas fa-exclamation-circle"></i>
            </div>
            <h1><span class="titre-dot">.</span>Supprimer</h1>
            <p>Vous êtes sur le point de supprimé un compte</p>
            <p>êtes-vous sur de vouloir le suprimer ?</p>
            <div>
                <button class="btn-close modal-btn cancel">Non</button>
                <button class="btn-confirm modal-btn ok">Oui, le supprimer!</button>
            </div>
        </div>
    </div>
    <div id="modal-bg"></div>

    <div class="section manage">
        <div id="db"></div>
        <form action="javascript:void(0);" class="form-add">
            <div class="group">
                <input type="text" name="email" id="mail" autocomplete="off" required>
                <label for="email">Email</label>
            </div>
            <div class="group">
                <input type="text" name="username" id="Uname" autocomplete="off" required>
                <label for="username">Username</label>
            </div>
            <input class="btn" type="submit" name="form-add" id="send" value="Envoyer">
    </div>
    </form>
    <script src="js/main.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/addclient.js"></script>
</body>

</html>