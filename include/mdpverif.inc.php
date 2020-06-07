<?php
require 'function.inc.php';
require 'dbcon.inc.php';


$id = $_POST['id'];
$pass = $_POST['pass'];

$q = $db->prepare("SELECT `password` FROM `login` WHERE `uid`=:id");
$q->execute(['id' => $id]);

if($results = $q->fetch()){
    if (password_verify($pass, $results['password'])) {
        echo('mdp-correct');
    }else {
        echo('mdp-incorrect');
    }
}


?>