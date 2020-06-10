<?php
    require 'include/dbcon.inc.php';
    session_start();    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in) | Mot de passe oublié</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <link href="/css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/css/fontawesome/css/solid.css" rel="stylesheet">
</head>

<body id="profile">
    <header class="nav">
        <a href="index.php"><img class="login-logo" src="img/coddin.svg" alt="logo"></a>
    </header>
    <div class="web-content">
        <div class="section forget">
            <i id="i-user" class="fas fa-user fa-7x"></i>
            <div class="row">
                <form class="button" action="javascript:void(0);">
                    <h3>Mot de passe oublié</h3>
                    <div class="group">
                        <input id="UEmail" type="text" autocomplete="off" required>
                        <label for="UEmail">Username / Email</label>
                        <div id="infos" class="infos">
                            <i class="fas"></i>
                            <p id="usermessage"></p>
                        </div>
                    </div>
                    <button type="submit" id="f-UEmail" class="btn">Continuer</button>
                </form>
            </div>
            <div id="f-merci" class="row hide">
                <h1>Merci</h1>
                <p>Un email vous a été envoyée</p>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/forget.js"></script>
</body>

</html>