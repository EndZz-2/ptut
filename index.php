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
                        <div class="video">
                            <div id="countdown"></div>
                        </div>
                        <!-- <video class="video" height="340" controls>
                            <source src="vod/coddin.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video> -->
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
        <!-- <div class="section">
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
        </div> -->
        <div class="section pole">
            <div class="row" style="margin: 0% 2%;">
                <div class="col col-4">
                    <h1><span class="titre-dot">.</span>Conception</h1>
                    <div class="conception-text">
                        <h2>1 Projet | 3 Pôles</h2>
                        <img style="height: 140px;" src="img/YouArein.svg" alt="You Are In">
                        <h2>Nos trois pôles</h2>
                    </div>
                </div>
                <div class="col col-4" style="margin: 0;">
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
                    <a class="btn service" href="">Nos Services</a>
                </div>
            </div>
        </div>
    </div>
    <?php
        require 'footer.php';
    ?>
    <script src="js/burger.js"></script>
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("6 1, 2020 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.querySelector("#countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
        
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.querySelector("#countdown").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>
</body>

</html>