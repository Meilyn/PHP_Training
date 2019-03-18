<?php 
	//Exercice #1
	


									
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Conditions</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<meta name="description" content="Exercices PHP">
	<meta name="keywords" content="HTML,CSS,PHP, Bootstrap">
	<meta name="author" content="[MafiaGirl || Angry Creative]">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<i class="fas fa-user-tie text-align-center">Les paramètres d'URL</i>
	</nav>
	<div class="jumbotron">
		<h1>PHP: URL</h1>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N°1</h3><hr>	
			<p class="text-justify">
				Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean<br><br>
				 <code>
					<?php 
					echo
					$_GET['prenom'] . ' ' . $_GET['nom']; ?>
				</code>
				</form>
			</p>
			<h3 id="inv">Exercice N°2</h3><hr>	
			<p class="text-justify">
				Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean<br><br>
				 <code>
					<?php
					if(isset($_GET["age"])){
						echo $_GET["age"];
					} 
					echo "Age n'existe pas <br>";

					echo $_GET['prenom'] . ' ' . $_GET['nom']; ?>
				</code>
				</form>
			</p>
			<h3 id="inv">Exercice N°3</h3><hr>	
			<p class="text-justify">
				Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016<br><br>
				 <code>
					<?php
					echo $_GET['dateDebut'] . ' ' . $_GET['dateFin']; 
					?>
				</code>
				</form>
			</p>
			<h3 id="inv">Exercice N°4</h3><hr>	
			<p class="text-justify">
				Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP<br><br>
				 <code>
					<?php
					echo $_GET['langage'] . ' ' . $_GET['serveur']; 
					?>
				</code>
				</form>
			</p>
			<h3 id="inv">Exercice N°5</h3><hr>	
			<p class="text-justify">
				Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12<br><br>
				 <code>
					<?php
					echo $_GET['semaine']; 
					?>
				</code>
				</form>
			</p>
			<h3 id="inv">Exercice N°6</h3><hr>	
			<p class="text-justify">
				Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101<br><br>
				 <code>
					<?php
					echo $_GET['batiment'] . ' ' . $_GET['salle'];
					?>
				</code>
				</form>
			</p>																	
		</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>