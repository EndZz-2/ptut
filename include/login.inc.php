<?php
require 'function.inc.php';
require 'dbcon.inc.php';

if(isset($_POST['login'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        //champ vide
        header("Location: ../login.php?error=champvide");
        exit();
    }
    else{

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $q = $db->prepare("SELECT * FROM $table WHERE username=:user");
        $q->execute(['user' => $user]);
        $results = $q->fetch();

        if($results == true){
            // Le compte existe
            if (password_verify($pass, $results['password'])) {
                console_log('Marche');
                session_start();
                $_SESSION['userUid'] = $results['uid'];
                $_SESSION['username'] = $results['username'];
                $_SESSION['admin'] = $results['admin'];
                header("Location: ../index.php");
                exit(); 
            }else {
            echo('champincorect');
            header("Location: ../login.php");
            exit();
            }
        }else{
            echo('Pas de compte!');
            header("Location: ../login.php");
            exit();  
        }
    }
}
?>

