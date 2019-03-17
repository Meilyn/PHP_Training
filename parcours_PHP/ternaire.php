<?php 
	//Exercice #8
	if ($_SERVER['REQUEST_METHOD']==='GET'){
		$sexe = $_GET['sexe'];

		$bonjour = ($sexe == 'femme')? "Bonjour, Madame " : "Bonjour, Monsieur";

	}	
										
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
		<i class="fas fa-user-tie text-align-center"> PHP TRAINING</i>
		<ul class="nav">
  			<li class="nav-item">
    			<a class="nav-link" href="variables.php?nom=Patrick">Variables</a>
 			</li>
			<li class="nav-item">
			    <a class="nav-link" href="conditions.php">Conditions</a>
			</li>
			<li class="nav-item">
			    <a class="nav-link" href="conditions-switch.php">Conditions Switch</a>
			</li>
			<li class="nav-item">
			    <a class="nav-link" href="arrays.php">Tableaux</a>
			</li>
			<li class="nav-item">
			    <a class="nav-link" href="php-boucles.php">Boucles</a>
			</li>
			<li class="nav-item">
			    <a class="nav-link" href="ternaire.php">Ternaires</a>
			</li>
			<li class="nav-item">
			    <a class="nav-link" href="function.php">Functions</a>
			</li>
		</ul>
	</nav>
	<div class="jumbotron">
		<h1>PHP: Ternaire</h1>
	</div>
		<div class="container">
			<h3 id="inv">Ternaire</h3><hr>	
			<p class="text-justify">
				<form method = "GET" class="form-group">
				 	<label for="femme">Femme</label>
				 	<input type="radio" name="sexe" value="femme">
				 	<label for="homme">Homme</label>
				 	<input type="radio" name="sexe" value="homme"><br>
				 	<input type="submit" value="OK"><br>
				 <code>
					<?php echo $bonjour; ?>
				</code>
				</form>
			</p>										
		</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>