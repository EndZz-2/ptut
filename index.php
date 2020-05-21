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
        <div class="content-index">
            <div class="first-container row">
                <div class="col-1">
                    <div class="video"></div>
                </div>
                <div class="col-2">
                    <div class="text">
                        <h1>
                            <span class="titre-dot">.</span>Description entreprise</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="#">
            <div class="#">
                <div class="#">
                    <div >
                        <h1>
                            .nospartenaires</h1>
                        <table border="1" class="tabcenter" cellspacing="1" style="width:200px ">
                            <tbody>
                                <tr>
                                    <td><img src="img/test.png"/>
                                    </td>
                                    <td><img src="img/test.png"/>
                                    </td>
                                    <td><img src="img/test.png"/>
                                    </td>
                                    <td><img src="img/test.png"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="content-index">
            <div class="first-container row">
                <div class="col-1">
                    <div class="conception">
                        <h1 >
                            .conception
                        </h1>
                        <p>> Création d'une identité visuelle
                        </p>
                        <p>
                            > Création d'un site web vitrine</p>
                        <p>> Rédaction d'article
                        </p>
                    </div>
                    <div class="col-1">

                        <a class="btn" href="contact.php">Services</a>

                    </div>
                </div>
            </div>

        </body>

    </html>