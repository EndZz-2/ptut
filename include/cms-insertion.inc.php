<?php
if (isset($_POST)){
    if(!empty($_POST['text'] && !empty($_POST['id']))){
        require 'dbcon.inc.php';
        $text = $_POST['text'];
        $id = $_POST['id'];

        $q = $db->prepare("UPDATE `cms` SET `content`=:content WHERE `id`=:contentId;");
        $q->execute(['contentId' => $id, 'content' => $text]);

        if(!empty($q)){
            echo 'Update ok';
        }else  echo 'Update no';
    }
}


?>