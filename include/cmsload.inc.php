<?php
require 'dbcon.inc.php';

$page = $_POST['page'];
// $page = $_GET['page'];

$q = $db->prepare("SELECT id, content FROM `cms` WHERE `page`=:p");
$q->execute([':p' => $page]);
$r = $q -> fetchall(PDO::FETCH_CLASS);
echo json_encode($r);