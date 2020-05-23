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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <?php
        require 'header.php';
    ?>
    <img class="scrolldown" src="img/scroll.svg" alt="scroll">
    <div class="banner">
        <img class="AYI" src="img/AreYouIn.svg" alt="AreYouIn">
        <img class="AYI-back" src="img/AreYouIn-.svg" alt="?">
    </div>
    <div class="web-content">
        <div class="section">
            <div class="row">
                <div class="col col-2">
                    <div>
                        <iframe class="video" src="https://streamable.com/e/yatxh1" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col col-2">
                    <div class="text">
                        <h1><span class="titre-dot">.</span>Notre agence</h1>
                        <p>Codd in, c’est votre agence de développement web. Nous nous occupons de la réalisation de
                            votre <span class="text-blue">site vitrine moderne</span>, devenu aujourd’hui un atout
                            indéniable à votre stratégie de
                            communication.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div style="text-align: center;" class="col col-4">
                    <h1><span class="titre-dot">.</span>nospartenaires</h1>
                </div>
            </div>
            <div class="row partenaire">
                <div class="grid">
                    <a href="http://shivar.mmitoulon.com">
                        <img class="logo" src="img/ptut/shiva.svg" alt="shivar">
                    </a>
                </div>
                <div class="grid">
                    <a href="http://unitatispictures.mmitoulon.com">
                        <img class="logo" src="https://via.placeholder.com/160/ffffff" alt="ptut-1">
                    </a>
                </div>
                <div class="grid">
                    <a href="http://shivar.mmitoulon.com">
                        <img class="logo" src="https://via.placeholder.com/160/ffffff" alt="ptut-1">
                    </a>
                </div>
                <div class="grid">
                    <a href="http://shivar.mmitoulon.com">
                        <img class="logo" src="https://via.placeholder.com/160/ffffff" alt="ptut-1">
                    </a>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row" style="margin: 0% 2%;">
                <div class="col col-4">
                    <h1><span class="titre-dot">.</span>Conception</h1>
                    <div class="conception-text">
                        <h2>1 Projet | 3 Pôles</h2>
                        <img style="height: 140px;" src="img/YouArein.svg" alt="You Are In">
                        <h2>Nos trois pôles</h2>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="ligne"></div>
                    <div class="card design">
                        <div class="rond"></div>
                        <h1 class="title">Design</h1>
                        <p class="content">Vos clients méritent un site clair, facile de navigation et bien pensé. C’est
                            ce dans quoi notre Pôle Design se spécialise, parallèlement à l’élaboration de l’aspect
                            visuel de votre site. Tendances et modernité sont nos maîtres-mots.</p>
                    </div>
                    <div class="card web">
                        <div class="rond"></div>
                        <h1 class="title">Web</h1>
                        <p class="content">En réponse directe au Pôle Design, notre Pôle Web s’occupe de réaliser votre
                            site web. C’est lui qui pose les fondations, puis qui les embellit. Ce n’est pas magique,
                            mais presque ! </p>
                    </div>
                    <div class="card redaction">
                        <div class="rond"></div>
                        <h1 class="title">Rédaction</h1>
                        <p class="content">Parce que votre puissance de communication passe aussi par les mots, nous
                            vous proposons à travers notre Pôle Rédaction de rédiger le contenu de toutes les pages de
                            votre site. Un site vitrine vide ne fait pas bonne mine !</p>
                    </div>
                </div>
                <div class="col col-4">
                    <a class="btn services" href="">Nos Services</a>
                </div>
            </div>
        </div>

    </div>
    <script src="js/burger.js"></script>
</body>

</html>