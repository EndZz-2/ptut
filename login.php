<?php
    require 'include/dbcon.inc.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in) | Login</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="nav">
        <a href="index.php"><img class="login-logo" src="img/coddin.svg" alt="logo"></a>
    </header>
    <div class="section login">
        <div class="row">
            <?php
        if(isset($_GET['u']) && isset($_GET['t'])){
            $Uname = $_GET['u'];
            $token = $_GET['t'];
            
            
            $q = $db->prepare("SELECT `token`,`password`,`uid` FROM $table WHERE `username`=:user AND `token`=:token");
            $q->execute([
                'user' => $Uname,
                'token' => $token
            ]);
            $result = $q->rowCount();
            if($result != 0){
                $data = $q->fetch();
    ?>
            <form class="fmdp" action="include/login.inc.php" method="POST">
                <input type="hidden" name="uid" value="<?= $data['uid']?>">
                <h1>Votre mot de passe</h1>
                <input type="text" name="pass" value="<?= $data['password']?>" autocomplete="off" required>
                <p>
                    Cliquer pour le modifier.<br><br>
                    Confirmer si le mot de passe vous convient. 
                   
                </p>
                <input name="pass_change" class="btn" type="submit" value="Confirmé">
            </form>
            <?php
            }else{
    ?>
            <form class="flogin" action="include/login.inc.php" method="POST">
                <h1>Connexion</h1>
                <div class="group">
                    <input name="user" type="text" autocomplete="off" required>
                    <label for="user">Nom d'Utilisateur</label>
                </div>
                <div class="group">
                    <input name="pass" type="password" autocomplete="off" required>
                    <label for="pass">Mot de passe</label>
                </div>
                <a class="forgot" href="mdpforget.php">Mot de passe oublié ?</a>
                <input name="login" class="btn" type="submit" value="SEND">
            </form>
            <?php
            }
        }
        else{
    ?>
            <form class="flogin" action="include/login.inc.php" method="POST">
                <h1>Connexion</h1>
                <div class="group">
                    <input name="user" type="text" autocomplete="off" required>
                    <label for="user">Nom d'Utilisateur</label>
                </div>
                <div class="group">
                    <input name="pass" type="password" autocomplete="off" required>
                    <label for="pass">Mot de passe</label>
                </div>
                <a class="forgot" href="mdpforget.php">Mot de passe oublié ?</a>
                <input name="login" class="btn" type="submit" value="SEND">
            </form>
            <?php
        }
    ?>
        </div>
    </div>
</body>

</html>