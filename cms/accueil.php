<?php
    session_start();
    if(!isset($_SESSION['admin']) == 1){
        header('location: /');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="indextitle"></title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/grid.css">
</head>

<body>
    <?php
        require '../header.php';
    ?>
    <img class="scrolldown" src="/img/scroll.svg" alt="scroll">
    <div class="banner">
        <img class="AYI" src="/img/AreYouIn.svg" alt="AreYouIn">
        <img class="AYI-back" src="/img/AreYouIn-.svg" alt="?">
    </div>
    <div class="web-content">
        <div class="section accueil">
            <div class="row">
                <div class="col col-2">
                    <div class="video-container">
                        <video class="video" height="340" poster="/img/video_poster.png" controls>
                            <source src="/vod/coddin_final.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
                <div class="col col-2">
                    <div class="text">
                        <h1 class="event">
                            <span id="index1" class="cms-content">
                                
                            </span>
                        </h1>

                        <p class="event">
                            <span id="index2" class="cms-content">
                                
                            </span>
                        </p>
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
        <div class="section pole cms">
            <div class="row" style="margin: 0% 2%;">
                <div class="col col-4">
                    <h1 class="event">
                        <span id="index3" class="cms-content">
                            
                        </span>
                    </h1>
                    <div class="conception-text">
                        <h2 class="no-dot">1 Projet | 3 Pôles</h2>
                        <img style="height: 140px;" src="/img/YouArein.svg" alt="You Are In">
                        <h2 class="no-dot">Nos trois pôles</h2>
                    </div>
                </div>
                <div class="col col-4" style="margin: 0;">
                    <div class="card design">
                        <div class="rond"></div>
                        <h1 class="title">Design</h1>
                        <span class="event">
                            <p id="index4" class="cms-content content"></p>
                        </span>
                    </div>
                    <div class="card web">
                        <div class="rond"></div>
                        <h1 class="title">Web</h1>
                        <span class="event">
                            <p id="index5" class="cms-content content"></p>
                        </span>
                    </div>
                    <div class="card redaction">
                        <div class="rond"></div>
                        <h1 class="title">Rédaction</h1>
                        <span class="event">
                            <p id="index6" class="cms-content content"></p>
                        </span>
                    </div>
                    <a class="btn service" href="">Nos Services</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var page = "index";
    </script>
    <script src="/js/burger.js"></script>
    <script src="/js/loadcms.js"></script>
    <script src="cms.js"></script>
</body>

</html>