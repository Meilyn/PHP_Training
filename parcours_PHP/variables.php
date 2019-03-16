<?php 
	$prenom = "Meilyn";
	$age = 28;
	$faim = "Je suis un peu anorexique";
	$yeux = "couleur marron";

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Variables Round 1</title>
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
		<i class="fas fa-user-tie">Les Variables</i>
	</nav>
	<div class="jumbotron">
		<h1>Humans</h1>
		<p>PHP: Les variables </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 1</h3><hr>	
			<p class="text-justify">
				<code>
					<h1>Bonjour <?php echo $_GET['nom']; ?></h1>
				</code>
			</p>
			<h3 id="inv">Exercices</h3><hr>	
			<p class="text-justify">
				<code>
					<?php 
					echo "Bonjour je m'apelle " .$prenom. " J'ai " .$age. " concernant la faim " .$faim. " et j'ai pas faim " 
					." mes yeux sont " .$yeux. " et ceci est finis " ;
					 ?>
				</code>
			</p>		
		</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>