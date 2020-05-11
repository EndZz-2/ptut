<?php
    require 'dbcon.inc.php';

    if(isset($_POST['uid'])){
        
        $uid = $_POST['uid'];

        $q = $db->prepare("DELETE FROM $table WHERE `uid`=:id");
        
        if($q->execute([":id" => $uid]) == 1){
            echo "La ligne $uid a bien était supprimé!";
        }else echo 'Echec de la suppression !';
    }
?>