<?php
$hote = "localhost";
$utilisateur = "root";
$motDePasse = "";
$dbname= "ptut";
$table = "login";

try
{
	$db = new PDO('mysql:host='.$hote.';dbname='.$dbname,$utilisateur,$motDePasse);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
