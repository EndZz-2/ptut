<?php
require 'dbcon.inc.php';

$UEmail = $_POST['UEmail'];

$q = $db->prepare("SELECT `username`,`uid`,`email` FROM `login` WHERE `username`=:UE OR `email`=:UE");
$q->execute(['UE' => $UEmail]);

if($results = $q->fetch()){

    $Uid = $results['uid'];
    $Uname = $results['username'];
    $mail = $results['email'];

    $token = sha1(uniqid($Uname, true));
    $url = "coddin.mmitoulon.com/login.php?t=".$token."&u=".$Uname;

    $q = $db->prepare("UPDATE $table SET `token`=:token WHERE `uid`=:id");
    $q->execute([
        'token' => $token,
        'id' => $Uid
    ]);

    $message = '
            <html>

            <head>
                <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
                <title>Réinitialisation du mot de passe</title>
                <link rel="import" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap">
            </head>
           
            <body style=" margin: 0; padding: 0; background-color: #121212; font-family: \'Merriweather Sans\', sans-serif; color: #fff; text-align: center;">
                <h1 style="padding-top: 100px; font-size: 2.5em;"><span style="color: #ff1d4e; font-weight: 700; font-size: 50px;">.</span>Réinitialisation du mot de passe</h1>
                <p>Bonjour, '.$Uname.'.
                    <br>Afin de finalisé la réinitialisation de votre compte merci de vous rendre sur le lien
                    suivant :</p>
                <a style="color: #00FFCE; text-decoration: underline;" href="'.$url.'" target="_blank">Lien de réinitialisation</a>
                <br><br><br><br><br>
            </body>
           
            </html>
            ';

            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            $headers[] = 'From: coddin@website.com';

            $subject = "Réinitialisation du mot de passe";

            if(mail($mail, $subject, $message, implode("\r\n", $headers))){
                echo('👌');
            }else{
                echo('mail-error');
            }
}else{
    echo('❌'); 
}
?>