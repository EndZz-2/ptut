<?php
require 'function.inc.php';
require 'dbcon.inc.php';

if(!empty($_POST)){
    $admin = $_POST['admin'];
    $mail = $_POST['mail'];
    $Uname = $_POST['username'];

    if($admin == 0){
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

            $url = "localhost/Ptut/Login/login.php?t=".$token."&u=".$Uname;

            $q = $db->prepare("INSERT INTO $table (`uid`,`email`,`username`, `link`, `password`, `token`, `admin`) VALUES (NULL,:mail,:username,:link,:pass,:token,:grade);");
            $q->execute([
                'mail' => $mail,
                'username' => $Uname,
                'link' => $url,
                'pass' => $pass,
                'token' => $token,
                'grade' => 0
            ]);
            if(!empty($q)){
                echo 'successs';
                
                $message = <<<ENDMSG
                Merci d'utilisé codd in. S'il vous plait allez sur le lien suivant :
                $url 
                Pour activer votre compte.
                ENDMSG;
                mail($mail, "Activée votre compte", $message);

            }else echo 'error=insertion';
        }
        

    }
}