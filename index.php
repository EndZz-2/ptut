<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="indextitle">Codd(in) | Accueil</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
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
        <div class="section accueil">
            <div class="row">
                <div class="col col-2">
                    <div class="video-container">
                        <!-- <div class="video">
                            <div id="countdown"></div>
                        </div> -->
                        <video class="video" height="340" poster="/img/video_poster.png" controls>
                            <source src="/vod/coddin_final.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
                <div class="col col-2">
                    <div class="text">
                        <h1 id="index1">Notre agence</h1>
                        <p id="index2">Codd in, c’est votre agence de développement web. Nous nous occupons de la réalisation de
                            votre <span class="text-blue">site vitrine moderne</span>, devenu aujourd’hui un atout
                            indéniable à votre stratégie de
                            communication.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="section">
            <div class="row">
                <div style="text-align: center;" class="col col-4">
                    <h1>nospartenaires</h1>
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
        </div> -->
        <div class="section pole">
            <div class="row" style="margin: 0% 2%;">
                <div class="col col-4">
                    <h1 id="index3">Conception</h1>
                    <div class="conception-text">
                        <h2 class="no-dot">1 Projet | 3 Pôles</h2>
                        <img style="height: 140px;" src="img/YouArein.svg" alt="You Are In">
                        <h2 class="no-dot">Nos trois pôles</h2>
                    </div>
                </div>
                <div class="col col-4" style="margin: 0;">
                    <div class="ligne"></div>
                    <div class="card design">
                        <div class="rond"></div>
                        <h2 class="title">Design</h2>
                        <p id="index4" class="content">Vos clients méritent un site clair, facile de navigation et bien pensé. C’est
                            ce dans quoi notre Pôle Design se spécialise, parallèlement à l’élaboration de l’aspect
                            visuel de votre site. Tendances et modernité sont nos maîtres-mots.</p>
                    </div>
                    <div class="card web">
                        <div class="rond"></div>
                        <h2 class="title">Web</h2>
                        <p id="index5" class="content">En réponse directe au Pôle Design, notre Pôle Web s’occupe de réaliser votre
                            site web. C’est lui qui pose les fondations, puis qui les embellit. Ce n’est pas magique,
                            mais presque ! </p>
                    </div>
                    <div class="card redaction">
                        <div class="rond"></div>
                        <h2 class="title">Rédaction</h2>
                        <p id="index6" class="content">Parce que votre puissance de communication passe aussi par les mots, nous
                            vous proposons à travers notre Pôle Rédaction de rédiger le contenu de toutes les pages de
                            votre site. Un site vitrine vide ne fait pas bonne mine !</p>
                    </div>
                    <a class="btn service" href="services.php">Nos Services</a>
                </div>
            </div>
        </div>
    </div>
    <?php
        require 'footer.php';
    ?>
    <script>
        var page = "index";
    </script>
    <script src="js/burger.js"></script>
    <script src="js/loadcms.js"></script>
</body>

</html>