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
	<title>Codd(in) | Contact</title>
	<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/grid.css">
</head>

<body>
	<?php require 'header.php';?>
	<div class="section projet">
		<div class="row">
			<div class="col col-4 file">
				<h1><span class="titre-dot">.</span>Journaux Hebdomadaires</h1>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 10.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_10</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 11.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_11</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 12.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_12</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 13.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_13</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 14.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_14</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 15.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_15</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 16.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_16</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 17.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_17</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 18.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_18</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 19.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_19</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 20.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_20</span>
				</div>
				<div class="tooltip">
					<a href="coddin/journaux hebdo/CODD IN JOURNAL HEBDO SEMAINE 21.pdf" type="application/pdf"
						target="_blank"><i class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Semaine_21</span>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col col-4 file">
				<h1><span class="titre-dot">.</span>Compte rendu de réunions</h1>
				<div class="tooltip">
					<a href="coddin/Compte_rendu_reunion_Coddin_23_03.pdf" type="application/pdf" target="_blank"><i
							class="fas fa-file-pdf fa-7x"></i></a>
					<span class="tooltiptext">Réunions 1</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-4 file">
				<h1><span class="titre-dot">.</span>Livrables</h1>
				<div class="tooltip">
					<a href="coddin/Codd_in_CHARTE_GRAPHIQUE.pdf" type="application/pdf" target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Charte Graphique</span>
				</div>
				<div class="tooltip">
					<a href="coddin/Codd in STATUT JURIDIQUE.pdf" type="application/pdf" target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Statut Juridique</span>
				</div>
				<div class="tooltip">
					<a href="coddin/CODD IN MAQUETTE COMPTE RENDU DE RÉUNION.pdf" type="application/pdf"
						target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Maquette Réunions</span>
				</div>
				<div class="tooltip">
					<a href="coddin/CODD_IN_Cahier_des_charges.pdf" type="application/pdf" target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Cahier des Chages</span>
				</div>
				<div class="tooltip">
					<a href="coddin/CODD_IN_Event_Dev_Durable.pdf" type="application/pdf" target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Evenement Dev Durable</span>
				</div>
				<div class="tooltip">
					<a href="coddin/CONTEXTE_Codd in.pdf" type="application/pdf" target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Contexte Codd in</span>
				</div>
				<div class="tooltip">
					<a href="coddin/GANTT Codd in.gan" download>
						<i class="fas fa-file fa-7x"></i>
					</a>
					<span class="tooltiptext">Gantt Codd in</span>
				</div>
				<div class="tooltip">
					<a href="coddin/PERT Codd in.xlsx" download>
						<i class="fas fa-file-excel fa-7x"></i>
					</a>
					<span class="tooltiptext">Pert Codd in</span>
				</div>
				<div class="tooltip">
					<a href="coddin/Tableau_des_tâches_Codd in.pdf" type="application/pdf"
						target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Tableau des Tâches</span>
				</div>
				<div class="tooltip">
					<a href="coddin/WBS_Codd in.pdf" type="application/pdf"
						target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">WBS Codd in</span>
				</div>
				<div class="tooltip">
					<a href="coddin/UX UI rédac/UX_coddin.pdf" type="application/pdf"
						target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">UX Site</span>
				</div>
				<div class="tooltip">
					<a href="coddin/UX UI rédac/UI_coddin.pdf" type="application/pdf"
						target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">UI Site</span>
				</div>
				<div class="tooltip">
					<a href="coddin/UX UI rédac/rédactionnel codd in.pdf" type="application/pdf"
						target="_blank">
						<i class="fas fa-file-pdf fa-7x"></i>
					</a>
					<span class="tooltiptext">Rédacion Site</span>
				</div>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
	<script src="js/burger.js"></script>
</body>

</html>