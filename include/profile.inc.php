<?php
require 'function.inc.php';
require 'dbcon.inc.php';


if(isset($_POST['user'])){
    $uid = $_POST['id'];
    $user = $_POST['user'];

    $q = $db->prepare("UPDATE $table SET `username`=:user WHERE `uid`=:id");
    $r = $q->execute([
        'user' => $user,
        'id' => $uid
    ]);

    if($r){
        echo "👌";
        session_start();
        $_SESSION['username'] = $user;
    }else echo "❌";
}

if(isset($_POST['pass'])){
    $uid = $_POST['id'];
    $pass = $_POST['pass'];

    $options = [
        'cost' => 12,
    ];
    
    $hashpass = password_hash($pass,PASSWORD_BCRYPT,$options);
    
    $q = $db->prepare("UPDATE $table SET `password`=:pass WHERE `uid`=:id");
    $r = $q->execute([
        'id' => $uid,
        'pass' => $hashpass
    ]);

    if($r){
        echo "👌";
    }else echo "❌";
}
?>