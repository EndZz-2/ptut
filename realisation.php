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
</head>

<body>
    <?php require 'header.php';?>
    <div class="content">
        <div>
            <h1><span class="titre-dot">.</span>réalisations </h1>
        </div>
        <section>
            <div>
                <p>Réalisations 1 </p>
            </div>
        </section>
        <section>
            <div>
                <p>Réalisations 2</p>
            </div>
        </section>

        <section>
            <div>
                <p>Réalisations 3 </p>
            </div>
        </section>

        <section>
            <div>
                <p>Réalisations 4</p>
            </div>
        </section>

        <section>
            <div>
                <p>Réalisations 5</p>
            </div>
        </section>
    </div>
</body>

</html>

<?php // include("footer.php"); ?>