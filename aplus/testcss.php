<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codd(in)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
        }

        .btn-open {
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
        require 'header.php';
    ?>
    <button class="btn btn-open">Show modal</button>
    <div class="confirm-modal modal">
        <div class="modal-content js-modal">
            <div class="modal-icon">
                <i id="icon" class="fas fa-exclamation-circle"></i>
            </div>
            <h1><span class="titre-dot">.</span>Supprimer</h1>
            <p>Vous êtes sur le point de supprimé un compte</p>
            <p>êtes-vous sur de vouloir le suprimer ?</p>
            <div>
                <button class="btn-close modal-btn cancel">Non</button>
                <button class="btn-confirm modal-btn ok">Oui, le supprimer!</button>
            </div>
        </div>
    </div>
    <div id="modal-bg"></div>
    <script src="js/modal.js"></script>
</body>

</html>