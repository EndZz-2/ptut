<?php

if(isset($_POST['contact-form'])){
    echo('contact-form');
    
    $nom = $_POST['nom'];
    $mail = $_POST['email'];
    $message = $_POST['message'];

    $to      = 'contact.coddin@gmail.com';
    $subject = 'Coodin contact';
    $message = "
    nom = $nom \r\n
    email = $mail \r\n
    message = \r\n $message
    ";
    $headers = 'From: coddin@website.com';
    

    if(mail($to, $subject, $message, $headers)){
        echo('send');
        header("location: ../merci.php");
        exit();
    }else{
        echo('erreur');
        header("location: ../contact.php");
        exit();
    }
}else{
    echo('pas de form');
    header("location: ../");
    exit();
}
?>