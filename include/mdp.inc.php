<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mdp</title>
</head>
<body>
<?php
$caract = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@!?$";
$passarr = [];
for($i = 1; $i <= 11; $i++) {
$Nbr = strlen($caract);
$Nbr = mt_rand(0,($Nbr-1));
array_push($passarr, $caract[$Nbr]);
}
$pass = implode($passarr);
echo $pass;
?>
</body>
</html>
