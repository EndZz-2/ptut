<?php
    require 'include/function.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in) | Réalisations web</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php require 'header.php';?>
    <div class="section apropos">
        <img src="img/coddin.svg" alt="logo">
        <div class="row">
            <div class="text">
                <h1><span class="titre-dot">.</span>Qui sommes-nous ?</h1>
                <p>
                    Codd in, c’est la synergie de 7 membres jeunes, soudés et aux compétences polyvalentes et
                    complémentaires. Autrefois étudiants au département MMI de l’IUT de Toulon, nous avons décidé de
                    nous lancer ensemble dans la vie active.<br><br>
                    Nous mettons un point d’honneur à entretenir une certaine proximité avec nos clients en identifiant
                    leurs envies, leurs besoins et en leur proposant des idées en adéquation avec leurs valeurs.
                    Toujours en veille, nous nous efforçons de surfer sur les tendances actuelles et proposons des sites
                    dynamiques et modernes. <br><br>
                    En résumé, nos valeurs englobent dynamisme, veille technologique, proximité, polyvalence,
                    complémentarité, partage et expertise. <br><br>
                    Nous avons hâte de travailler avec vous !
                </p>
            </div>
        </div>
        <div class="row">
            <div class="text center">
                <h1><span class="titre-dot">.</span>Equipe</h1>
            </div>
        </div>
    </div>
    <?php require 'footer.php';?>
    <script src="js/burger.js"></script>
</body>

</html>