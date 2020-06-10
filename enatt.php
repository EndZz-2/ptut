<?php
session_start();

if(!isset($_SESSION['admin']) == 1){
	header('location: ./');
	exit();
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Codd(in) | projet</title>
	<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/grid.css">
</head>

<body>
	<?php
		require 'header.php';
	?>
	<div class="section projet">
		<div class="row">
			<div class="col col-4 file">
				<h1>Journaux Hebdomadaires</h1>				
			</div>
		</div>
		<div class="row">
			<div class="col col-4 file">
				<h1>Compte rendu de réunions</h1>				
			</div>
		</div>
		<div class="row">
			<div class="col col-4 file">
				<h1>Livrables</h1>				
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
	<script src="js/burger.js"></script>
</body>

</html>