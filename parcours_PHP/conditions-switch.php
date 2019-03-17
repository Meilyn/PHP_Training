<?php 
	//Exercice #8
	if ($_SERVER['REQUEST_METHOD']==='GET'){
		$scores = $_GET['score'];
			
			switch ($scores) {
				case 'nul':
					$message = "Ce travaile est nul";
				break;
				case 'terrible':
					$message = "Ce travail n'est pas terrible";
				break;	
				case 'juste':
					$message = "Tout juste!";
				break;
				case 'pasmal':
					$message = "C'est pas mal.";
				break;
				case 'bravo':
					$message= "Bravo!";
				break;
				case 'tricheur':
					$message= "Police! Arrêtez ce tricheur!";
				break;	
				default:
					$message= "Veuillez choisir un score";
			}
	}
	//Exercice #9
		$age = $_GET['age'];
		$sexe = $_GET['sexe'];

		if ($sexe == "femme") {
			if ($age >= 21 && $age <= 40) {
				$msg = "Bonjour, bienvenue parmi nous!";
			}
		}	
			else {
				$msg = "Désolé, vous ne remplissez pas les critères de sélection.";
			}
	//Exercice #10
		$age = $_GET['age'];
		$sexe = $_GET['sexe'];

		if ($sexe == "femme") {
			if ($age >= 21 && $age <= 40) {
				$msg2 = "Bonjour, bienvenue parmi nous!";
			}
		}	
			if ($sexe != "femme"){
				$msg2 = "Désolé, vous ne remplissez pas les critères de sélection.";
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
    			<a class="nav-link" href="variables.php">Variables</a>
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
		</ul>
	</nav>
	<div class="jumbotron">
		<h1>PHP: Les condition Switch</h1>
	</div>
		<div class="container">
			<h3 id="inv">Switch</h3><hr>	
			<p class="text-justify">
				 <br>
				<form method = "GET" class="form-group">
					<label for="select">NOTE:</label>
					<select name="score" requiere>
						<option>Choisissez votre score</option>
						<option value="nul">1 - 3 points</option>
						<option value="terrible">6 - 9 points</option>
						<option value="juste">10 points</option>
						<option value="pasmal">11 - 14 points</option>
						<option value="bravo">15 - 18 points</option>
						<option value="tricheur">19 - 20 points</option><br>
					</select>
					<input type="submit" value="Get Note"><br>
				 <code>
					<?php echo $message; ?>
				</code>
				</form>
			</p>
			<h3 id="inv">Expression conditionnelle...</h3><hr>	
			<p class="text-justify">
				<form method = "GET" class="form-group">
					<label for="age">Quel est votre âge?</label><br>
				 	<input type="number" name="age" placeholder="Votre age"><br>
				 	<label for="genre">Sexe</label><br>
				 	<label for="femme">Femme</label>
				 	<input type="radio" name="sexe" value="femme">
				 	<label for="homme">Homme</label>
				 	<input type="radio" name="sexe" value="homme"><br>
				 	<input type="submit" value="OK"><br>
				 <code>
					<?php echo $msg; ?>
				</code>
				</form>
			</p>
			<h3 id="inv">La réécrire, mais sans ELSE.</h3><hr>	
			<p class="text-justify">
				<form method = "GET" class="form-group">
					<label for="age">Quel est votre âge?</label><br>
				 	<input type="number" name="age" placeholder="Votre age"><br>
				 	<label for="genre">Sexe</label><br>
				 	<label for="femme">Femme</label>
				 	<input type="radio" name="sexe" value="femme">
				 	<label for="homme">Homme</label>
				 	<input type="radio" name="sexe" value="homme"><br>
				 	<input type="submit" value="OK"><br>
				 <code>
					<?php echo $msg2; ?>
				</code>
				</form>
			</p>										
		</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>