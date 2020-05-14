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

	<section class="content contact">
		<form action="mailto:endzz2209@gmail.com?subject=Contact_Agence_Codd_in" method="GET" onsubmit="location.href='thanks.html';" class="form-contact">
			<h1><span class="titre-dot">.</span>contactez-nous</h1>
			<div class="input-container">
				<div class="group">
					<input name="nom" type="text" autocomplete="off" required>
					<label for="nom">Nom</label>
				</div>
				<div class="group">
					<input name="email" type="text" autocomplete="off" required>
					<label for="email">Email</label>
				</div>
				<div class="group">
					<textarea id="contact-textarea" name="message" autocomplete="off" required></textarea>
					<label for="message">Message</label>
				</div>
			</div>
			<input class="btn" type='submit' value='Envoyer'>
		</form>
	</section>
	<script src="js/main.js"></script>
</body>

</html>