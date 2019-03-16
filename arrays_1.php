<?php 
	$mois = [
		'Janvier',
		'Février',
		'Mars',
		'Avril', 
		'Mai',
		'Juin',
		'Julliet', 
		'Aout',
		'Septembre', 
		'Octobre', 
		'Novembre',
		'Décember'
	];
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Auvergne-Rhône-Alpes</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<meta name="description" content="Variables superglobales, sessions et cookies">
	<meta name="keywords" content="HTML,CSS,PHP, Bootstrap">
	<meta name="author" content="[MafiaGirl || Angry Creative]">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<i class="fas fa-user-tie">Exercice #1&2 [arrays] </i>
	</nav>
	<div class="jumbotron">
		<h1>Exercice 1 & 2</h1>
		<p>PHP:  Les tableaux </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice</h3><hr>
			<p class="text-justify">
				1.- Créer un tableau mois<br>
				2.- afficher la valeur de la troisième ligne de ce tableau. <br>
				3.- afficher la valeur de l'index 5. <br>
				4.- modifier le mois de aout pour lui ajouter l'accent manquant.
			</p> <br>
			<h3>Résultat</h3><hr>	
			<p class="text-justify">
			<code>
				<?php 
	 			echo $mois[2]. " " .$mois[5]. " " .$mois[7]= 'Août';
				?>
			</code>	
	 		</p>
		</div>
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>