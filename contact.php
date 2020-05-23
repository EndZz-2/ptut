<?php require 'include/function.inc.php';
session_start();
?>
<!DOCTYPE html>
	<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Codd(in) | Contact</title>
		<link rel="icon" href="img/logo.png" type="image/x-icon">
		<link rel="stylesheet" href="css/main.css">	
	</head>

	<body>
		<?php require 'header.php';?>
		<div class="web-content">
			<section class="section contact">
				<div class="row">
					<form action="mailto:endzz2209@gmail.com?subject=Contact_Agence_Codd_in" method="GET"
						onsubmit="location.href='thanks.html';" class="form-contact">
						<h1><span class="titre-dot">.</span>contactez-nous</h1>
						<div class="input-container">
							<div class="group"><input name="nom" type="text" autocomplete="off" required><label
									for="nom">Nom</label></div>
							<div class="group"><input id="mail" name="email" type="text" autocomplete="off"
									required><label for="email">Email</label></div>
							<div class="group"><textarea id="contact-textarea" name="message" autocomplete="off"
									required></textarea><label for="message">Message</label></div>
						</div><input class="btn" type='submit' value='Envoyer'>
					</form>
				</div>
			</section>
			<section class="section map">
				<div class="row">
					<div class="col col-2">
						<div style="width: 100%"><iframe width="100%" height="400"
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2912.210177637305!2d5.938063514777239!3d43.121110779143095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c91b0a14bfe843%3A0x6bcfee881156660f!2sUniversit%C3%A9%20de%20Toulon%20Campus%20Porte%20d%E2%80%99Italie%20Toulon!5e0!3m2!1sfr!2sfr!4v1588781915274!5m2!1sfr!2sfr"
								frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
					</div>
				</div>
			</section>
		</div>
		<script src="js/main.js"></script>
		<script src="js/burger.js"></script>
	</body>

	</html>