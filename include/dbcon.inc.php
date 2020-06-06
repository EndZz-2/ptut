<?php

$hote = "localhost";
$utilisateur = "root";
$motDePasse = "";
$dbname= "ptut";
$table = "login";

/*
$hote = "localhost";
$utilisateur = "coddin";
$motDePasse = "2Q5gmK5Lm";
$dbname= "coddin";
$table = "login";
*/
try
{
	$db = new PDO('mysql:host='.$hote.';dbname='.$dbname.";charset=utf8",$utilisateur,$motDePasse);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
