<?php
if(isset($_POST['register'])){

    require 'dbcon.inc.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];


    if(!empty($user) && !empty($pass)){
        $q = $db->prepare("SELECT * FROM $table WHERE username=:user");
        $q->execute(['user' => $user]);
        $result = $q->rowCount();
        if($result != 0){
            header("Location: ../register.php?error=usertaken");
            exit();
        }else{
            $options = [
                'cost' => 12,
            ];
    
            $hashpass = password_hash($pass,PASSWORD_BCRYPT,$options);
    
            $q = $db->prepare("INSERT INTO $table (`uid`, `username`, `password`) VALUES (NULL,:username,:pass);");
            $q->execute(['username' => $user, 'pass' => $hashpass]);

            if(!empty($q)){
                header("Location: ../register.php?sucess=true");
                exit();
            }else echo "marche pas";
        }
        
    }else{
        header("Location: ../register.php?error=champvide");
        exit();
    }
}
?>