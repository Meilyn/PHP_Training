<?php 
	$Auvergne = [
		'01'=> 'Ain',
		'03'=> 'Allier',
		'07'=> 'Ardèche',
		'15'=> 'Canta',
		'26'=> 'Drôme',
		'38'=>'Isère',
		'42'=> 'Loire',
		'43'=> 'Haute-Loire',
		'63'=> 'Puy-de-Dôme',
		'69'=> 'Rhône',
		'73'=> 'Savoie',
		'74'=> 'Haute-Savoie',
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
		<i class="fas fa-user-tie">Exercice # 3 [arrays] </i>
	</nav>
	<div class="jumbotron">
		<h1>Auvergne-Rhône-Alpes</h1>
		<p>PHP:  Les tableaux </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice 3</h3><hr>
			<p class="text-justify">
				1.- Créer un tableau associatif avec comme index le numéro des départements et en valeur leur nom. <br>
				2.- Afficher la valeur de l'index 69. <br>
				3.- Ajouter la ligne correspondant au département de la ville de Metz. <br>
				4.- Afficher toutes les valeurs ainsi que les clés associées grâce à une boucle sous la forme : "Le département" + nom_departement + "a le numéro" + num_departement
			</p> <br>
			<h3>Résultat</h3>
			<code>
				<?php 
					echo "l'index 69 est " .$Auvergne['69']. "<br>"; 
					foreach ($Auvergne as $key => $value) {
			 		echo "Le département ".$value. " ". "as le numero " .$key. "<br>";
				}
				?>
			</code>
		</div>
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>