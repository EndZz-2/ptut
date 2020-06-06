<?php
require 'function.inc.php';
require 'dbcon.inc.php';

if(!empty($_POST)){
    $admin = $_POST['admin'];
    $mail = $_POST['mail'];
    $Uname = $_POST['username'];

    $q = $db->prepare("SELECT * FROM $table WHERE `email`=:mail AND `username`=:user");
    $q->execute([
        'mail' => $mail,
        'user' => $Uname
    ]);
    $result = $q->rowCount();
    if($result != 0){
        echo 'usertaken';
    }else{
        $caract = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@!?$";
        $passarr = [];

        for($i = 1; $i <= 11; $i++) {
            $Nbr = strlen($caract);
            $Nbr = mt_rand(0,($Nbr-1));
            array_push($passarr, $caract[$Nbr]);
        }

        $pass = implode($passarr);

        // $options = [
        //     'cost' => 12,
        // ];

        // $hashpass = password_hash($pass,PASSWORD_BCRYPT,$options);

        $token = sha1(uniqid($Uname, true));

        $url = "coddin.mmitoulon.com/login.php?t=".$token."&u=".$Uname;

        $q = $db->prepare("INSERT INTO $table (`uid`,`email`,`username`, `link`, `password`, `token`, `admin`) VALUES (NULL,:mail,:username,:link,:pass,:token,:grade);");
        $q->execute([
            'mail' => $mail,
            'username' => $Uname,
            'link' => $url,
            'pass' => $pass,
            'token' => $token,
            'grade' => $admin
        ]);

        if(!empty($q)){
            echo 'successs';
            
            $message = '
            <html>

            <head>
                <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
                <title>Création d\'un nouveau compte agence coddin</title>
                <link rel="import" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap">
            </head>
           
            <body style=" margin: 0; padding: 0; background-color: #121212; font-family: \'Merriweather Sans\', sans-serif; color: #fff; text-align: center;">
                <h1 style="padding-top: 100px; font-size: 2.5em;"><span style="color: #ff1d4e; font-weight: 700; font-size: 50px;">.</span>Nouveau compte</h1>
                <p>Merci d\'utilisé codd in.
                    <br>Afin de finalisé la création de votre compte merci de vous rendre sur le lien
                    suivant :</p>
                <a style="color: #00FFCE; text-decoration: underline;" href="'.$url.'" target="_blank">Lien de création</a>
                <br><br><br><br><br>
            </body>
           
            </html>
            ';

            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            $headers[] = 'From: coddin@website.com';

            $subject = "Activée votre compte";

            if(mail($mail, $subject, $message, implode("\r\n", $headers))){
                echo('send');
            }else{
                echo('erreur');
            }

        }else echo 'error=insertion';
    }
}