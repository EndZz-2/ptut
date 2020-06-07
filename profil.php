<?php
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
    <link href="/css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/css/fontawesome/css/solid.css" rel="stylesheet">
</head>

<body id="profile">
    <header class="nav">
        <a href="index.php"><img class="login-logo" src="img/coddin.svg" alt="logo"></a>
    </header>
    <div class="web-content">
        <div class="section profile">
            <i id="i-user" class="fas fa-user fa-7x"></i>
            <div class="row">
                <form action="javascript:void(0);" class="button">
                    <input id="Uid" type="hidden" name="Uid" value="<?= $_SESSION['userUid']?>">
                    <div class="group">
                        <input id="Upass" type="password" autocomplete="off" required>
                        <label for="user">Mot de passe</label>
                        <div id="infos1" class="infos">
                            <i class="fas"></i>
                            <p id="usermessage1"></p>
                        </div>
                    </div>
                    <button type="submit" id="mdp" class="btn">Continuer</button>
                </form>
            </div>
            <div id="form-mdp" class="row hide">
                <div class="f-profile">
                    <h1>Option</h1>
                    <form action="javascript:void(0);" class="button">
                        <h3>Nom d'utilisateur</h3>
                        <div class="group">
                            <input id="user" name="usern" type="text" value="<?= $_SESSION['username']?>"
                                autocomplete="off" required>
                            <label for="usern">Nom d'utilisateur</label>
                            <div id="infos2" class="infos">
                                <i class="fas"></i>
                                <p id="usermessage2"></p>
                            </div>
                        </div>
                        <button type="submit" id="usern" class="btn">Valider</button>
                    </form>
                    <form action="javascript:void(0);" class="button">
                        <h3>Mot de passe</h3>
                        <div class="group">
                            <input id="npass1" name="pass" type="password" autocomplete="off" required>
                            <label for="pass">Nouveau Mot de passe</label>
                            <div id="infos3" class="infos">
                                <i class="fas"></i>
                            </div>
                        </div>
                        <div class="group">
                            <input id="npass2" name="pass" type="password" autocomplete="off" required>
                            <label for="pass">Confimation du Mot de passe</label>
                            <div id="infos4" class="infos">
                                <i class="fas"></i>
                                <p id="usermessage3"></p>
                            </div>
                        </div>
                        <button type="submit" id="newmdp" class="btn">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>