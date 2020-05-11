<?php
    require 'include/function.inc.php';
    require 'include/dbcon.inc.php';
    session_start();
    

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
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
    <form action="include/login.inc.php" method="POST">
        <input type="hidden" name="uid" value="<?= $data['uid']?>">
        <h1>Voici Le mot de pass de votre compte :</h1>
        <input type="text" name="pass" value="<?= $data['password']?>" autocomplete="off" required>
        <p>
            Si vous souhaiter le modifier. Changer le puis appuyée confirmer. <br>
            Le mot de passe restera modifiable par la suite.
        </p>      
        <input name="pass_change" class="btn" type="submit" value="Confirmé">
    </form>
    <?php
            }else{
    ?>
    <form action="include/login.inc.php" method="POST">
        <h1>Login</h1>
        <input type="text" placeholder="Nom d'Utilisateur" name="user" autocomplete="off" required>
        <input type="password" placeholder="Password" name="pass" autocomplete="off" required>
        <input name="login" class="btn" type="submit" value="SEND">
    </form>
    <?php
            }
        }
        else{
    ?>
    <form action="include/login.inc.php" method="POST">
        <h1>Login</h1>
        <input type="text" placeholder="Nom d'Utilisateur" name="user" autocomplete="off" required>
        <input type="password" placeholder="Password" name="pass" autocomplete="off" required>
        <input name="login" class="btn" type="submit" value="SEND">
    </form>
    <?php
        }
    ?>
</body>
</html>