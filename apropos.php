<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="apropostitle">Codd(in) | Réalisations web</title>
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
                <h1>
                   Qui sommes-nous ?
                </h1>
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
                <h1>Equipe</h1>
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
                <div class="card Dorian f-r">
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
                <div class="card Lorenzo f-l">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Lorenzo Tringali</div>
                        <div class="sous-titre">Développeur-web</div>
                        <blockquote cite="Izuku Midoriya" class="quote">
                            Les rêves peuvent devenir réalité. <br><br>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Lysandre f-r">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Manon Delzers</div>
                        <div class="sous-titre">Graphiste</div>
                        <blockquote cite="She-Ra" class="quote">
                            Par l'honneur du crâne ancestral ! <br><br>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Maxime f-l">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Maxime Delpiano</div>
                        <div class="sous-titre">Graphiste</div>
                        <blockquote cite="Proverbe grec" class="quote">
                            Goutte après goutte l'eau finit par creuser le marbre.
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Mathias f-r">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Matthias Schmid</div>
                        <div class="sous-titre">Réalisateur</div>
                        <blockquote cite="Hayao Miyazaki" class="quote">
                            C'est très ennuyeux de ne rien faire. <br>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col col-custom">
                <div class="card Hugo f-l">
                    <div class="img"></div>
                    <div class="content">
                        <div class="titre">Hugo Legrand</div>
                        <div class="sous-titre">Développeur-web</div>
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
            <form action="include/mail.inc.php" method="post" class="form-contact">
                <h1>contactez-nous</h1>
                <div class="input-container">
                    <div class="group"><input name="nom" type="text" autocomplete="off" required><label
                            for="nom">Nom</label></div>
                    <div class="group"><input id="mail" name="email" type="text" autocomplete="off" required><label
                            for="email">Email</label></div>
                    <div class="group"><textarea id="contact-textarea" name="message" autocomplete="off"
                            required></textarea><label for="message">Message</label></div>
                </div><input class="btn" type='submit' name="contact-form" value='Envoyer'>
            </form>
        </div>
    </div>

    <?php require 'footer.php';?>
    <script src="js/burger.js"></script>
    <script src="js/main.js"></script>
</body>

</html>