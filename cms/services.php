<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="servicestitle">Codd(in) | Services</title>
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require '../header.php';?>
    <div class="section services">
        <div class="row">
            <h1 class="event cms-title">
                <span id="services1" class="cms-content">
                   Codd in</h1>
            </span>
            <div class="col col-2">
                <div class="developer"></div>
            </div>
            <div class="col col-2">
                <p class="text event">
                    <span id="services2" class="cms-content">
                        Codd in est une agence de développement web. Elle est articulée autour de 3 pôles
                        complémentaires :
                        un
                        Pôle Design, un Pôle Développement et un Pôle Rédaction.<br><br>
                        Nos membres s’occupent de la conception, réalisation de votre site vitrine responsive,
                        ergonomique,
                        moderne et de ses contenus rédactionnels.<br><br>
                        Contrairement à certains des acteurs du marché, nous ne
                        passons par aucun CMS, tout est fait-main par notre équipe !
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="section etape">
        <h1 class="event cms-title">
            <span id="services3" class="cms-content">
                Les étapes de création
            </span>
        </h1>
        <div class="row rencontre">
            <div class="col col-2">
                <div class="text">
                    <h2 class="event">
                        <span id="services4" class="cms-content">
                            La rencontre
                        </span>
                    </h2>
                    <p class="event">
                        <span id="services5" class="cms-content">
                            En premier lieu, nous fixons avec vous une date de rendez-vous qui vous convienne. Le but,
                            échanger
                            et réfléchir avec vous sur ce dont vous avez besoin, qui vous êtes, qui nous sommes, et
                            pourquoi
                            vous présenter à nous aujourd’hui.<br><br>
                            C’est une étape clé, elle nous permet de cibler vos attentes, votre marché, votre entreprise
                            et
                            vos
                            valeurs.
                        </span>
                    </p>
                </div>
            </div>
            <div class="col col-2">
                <div class="img img-1"></div>
            </div>
        </div>
        <div class="row conception">
            <div class="col col-2">
                <div class="img img-2"></div>
            </div>
            <div class="col col-2">
                <div class="text">
                    <h2 class="event bleu">
                        <span id="services6" class="cms-content">
                            La conception
                        </span>
                    </h2>
                    <p class="event">
                        <span id="services7" class="cms-content">
                            Suite au rendez-vous, notre équipe se réunit et discute de la marche à suivre. Chacun est
                            assigné à un rôle qu’il devra assurer tout au long de votre projet. Vos demandes sont mises
                            à la
                            connaissance de l’équipe au complet et l’organisation se met en place.<br><br>
                            Là aussi, c’est une étape qui ne peut être manquée. C’est à ce moment que le projet se
                            concrétise, en concertation avec vous.
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row realisation">
            <div class="col col-2">
                <div class="text">
                    <h2 class="event jaune">
                        <span id="services8" class="cms-content">
                            La réalisation
                        </span>
                    </h2>
                    <p class="event">
                        <span id="services9" class="cms-content">
                            C’est l’étape culminante du projet. La réalisation constitue le pont entre votre idée et la
                            réalité de celle-ci. <br><br>
                            Toute notre équipe s’active à la réalisation de votre projet et nous faisons tout ce qui est
                            en
                            notre pouvoir pour livrer votre site dans les temps et dans un état conforme à ce que vous
                            imaginiez, voire meilleur !
                        </span>
                    </p>
                </div>
            </div>
            <div class="col col-2">
                <div class="img img-3"></div>
            </div>
        </div>
    </div>
    <script>
        var page = "services";
    </script>
    <script src="/js/burger.js"></script>
    <script src="/js/loadcms.js"></script>
    <script src="cms.js"></script>
</body>

</html>