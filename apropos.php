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
        <div class="row">
            <div class="col col-4">
                <div class="card chef">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Hugo Thivel</div>
                        <div class="sous-titre">Chef De Projet</div>
                        <blockquote cite="Jean Claude Van Damme" class="quote">
                            Ce n’est pas moi qui parle, c’est nous qui parlons.
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-custom">
                <div class="card Dorian">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Dorian Kluczynski</div>
                        <div class="sous-titre">Graphiste</div>
                        <blockquote cite="Antoine de Saint-Exupéry" class="quote">
                            Fais de ta vie un rêve, et d'un rêve, une réalité.
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Lorenzo">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Lorenzo Tringali</div>
                        <div class="sous-titre">Developpeur-web</div>
                        <blockquote cite="Izuku midoriya" class="quote">
                            Les rêves peuvent devenir réalité. <br><br>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Lysandre">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Manon Delzer</div>
                        <div class="sous-titre">Graphiste</div>
                        <blockquote cite="She-Ra" class="quote">
                            Par l'honneur du crâne ancestral ! <br><br>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Maxime">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Maxime Delpiano</div>
                        <div class="sous-titre">Graphiste</div>
                        <blockquote cite="Jean Claude Van Damme" class="quote">
                            Ce n’est pas moi qui parle, c’est nous qui parlons.
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Mathias">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Mathias</div>
                        <div class="sous-titre">Réalisateur</div>
                        <blockquote cite="Hayao Miyazaki" class="quote">
                            C'est très ennuyeux de ne rien faire. <br><br>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Hugo">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Hugo Le Grand</div>
                        <div class="sous-titre">Developpeur</div>
                        <blockquote cite="Solid Snake" class="quote">
                            A strong man doesn't need to read the future, he makes his own.
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section apropos-contact">
        <div class="row">
            <form action="mailto:endzz2209@gmail.com?subject=Contact_Agence_Codd_in" method="GET"
                onsubmit="location.href='thanks.html';" class="form-contact">
                <h1><span class="titre-dot">.</span>contactez-nous</h1>
                <div class="input-container">
                    <div class="group"><input name="nom" type="text" autocomplete="off" required><label
                            for="nom">Nom</label></div>
                    <div class="group"><input id="mail" name="email" type="text" autocomplete="off" required><label
                            for="email">Email</label></div>
                    <div class="group"><textarea id="contact-textarea" name="message" autocomplete="off"
                            required></textarea><label for="message">Message</label></div>
                </div><input class="btn" type='submit' value='Envoyer'>
            </form>
        </div>
    </div>

    <?php require 'footer.php';?>
    <script src="js/burger.js"></script>
</body>

</html>