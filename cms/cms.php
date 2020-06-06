<?php
    session_start();
    if(!isset($_SESSION['admin']) == 1){
        header('location: ./');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in) | Accueil</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/grid.css">
</head>

<body>
    <?php
        require '../header.php';
    ?>
    <div class="web-content">
        <div class="section">
            <div class="row">
                <h1>Pages</h1>
                <a href="accueil.php">Accueil</a>
                <a href="services.php">Services</a>
                <a href="apropos.php">A propos</a>
            </div>
        </div>
    </div>
    <script src="../js/burger.js"></script>
</body>

</html>