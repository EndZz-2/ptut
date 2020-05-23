<?php
    require 'include/function.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php require 'header.php';?>
    <div class="section realisation">
        <h1><span class="titre-dot">.</span>Réalisations</h1>
        <div class="row">
            <a href="https://livedemo00.template-help.com/wt_52524/" target="_blank">
                <div class="consultbiz"></div>
            </a>
        </div>
        <div class="row">
            <a href="https://getwid.getmotopress.com/" target="_blank">
                <div class="getwid"></div>
            </a>
        </div>
        <div class="row">
            <a href="https://ld-wp.template-help.com/wordpress_free/23520/" target="_blank">
                <div class="workylite"></div>
            </a>
        </div>
        <div class="row">
            <a href="https://ld-wp.template-help.com/wordpress_free/23481/" target="_blank">
                <div class="webion"></div>
            </a>
        </div>
        <div class="row">
            <a href="https://livedemo00.template-help.com/wt_51694/" target="_blank">
                <div class="ratherapp"></div>
            </a>
        </div>
    </div>
    <?php require 'footer.php';?>
</body>

</html>