<?php
    require 'include/function.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in) | Accueil</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
</head>

<body>
    <?php
        require 'header.php';
    ?>
    <div class="web-content">
        <div class="section">
            <div class="row">
                <h1><span class="titre-dot">.</span>Pages</h1>
                <a href="accueil.php">Accueil</a>
            </div>
        </div>
    </div>
    <?php
        require 'footer.php';
    ?>
    <script src="../js/burger.js"></script>
</body>

</html>