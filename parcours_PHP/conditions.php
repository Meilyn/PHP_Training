<?php 
	//Exercice #1
	$temperature = 25; 	

	if( $temperature >= 15 ) {
  		$vetement_du_jour = "T-shirt";
 	} else {	
   		$vetement_du_jour = "Pull-over";
 	}

 	//Exercice #2
 	$etat_chambre = 'inmaculee';

 	if ($etat_chambre == 'sale') {
 		$msg = "Ta chambre est sale";
 	}
 	elseif ($etat_chambre == 'degoutante') {
 		$msg = "Ta chambre est degoutante";
 	}
 	elseif ($etat_chambre == "inmaculee") {
 		$msg = "Ta chambre est inmaculée";
 	}
 	else {
 		$msg = "Ta chambre est en ordre";
 	}

 	//Exercice #3

	$today = date('H');
		
		if($today >= 5 AND $today <= 9 ){
			$message = "Bonjour";
		}
		elseif ($today >= 9 AND $today <= 12 ){
			$message = "Bonne journée";
		}
		elseif ($today > 12 AND $today <= 16){
			$message = "Bonne après-midi";
		}
		elseif ($today > 16 AND $today <= 21){
			$message = "Bonne soirée!";
		}
		elseif ($today > 21 OR $today < 5) {
			$message = "Bonne nuit!";
		}
		else {
			$message = "AUTRE DIMENSION";
		}

	//Exercice #4
		$age = $_GET['age'];

			if ($age < 12) {
				$msg_a = "Salut petit!";
			}
			elseif ($age >= 12 && $age <= 18) {
				$msg_a = "Salut l'ado!";
			}
			elseif ($age >= 18 && $age <= 115) {
				$msg_a = "Salut l'adulte!";
			}
			else {
				$msg_a = "Wow! Toujours vivant?";
			}
	//Exercice #5
		$age1 = $_GET['age1'];
		$genre = $_GET['genre'];

		if ($genre === "femme") {
			if ($age1 <= 12 ) {
				$msg_b = "Salut petite!";
			}
			elseif ($age1 >= 12 && $age1 <= 18) {
				$msg_b = "Salut l'adolescente!";
			}
			elseif ($age1 >= 18 && $age1 <= 115) {
				$msg_b = "Salut l'adulte!";
			}
			else {
				$msg_b = "Wow! Toujours vivante?";
			}
		}
		else {
			if ($age1 <= 12) {
				$msg_b = "Salut petit!";
			}
			elseif ($age1 >= 12 && $age1 <= 18) {
				$msg_b = "Salut l'ado!";
			}
			elseif ($age1 >= 18 && $age1 <= 115) {
				$msg_b = "Salut l'adult!";
			}
			else {
				$msg_b = "Wow! Toujours vivant?";
			}
		}
	//Exercice #6
		$age2 = $_GET['age2'];
		$genre2 = $_GET['genre2'];
		$langue = $_GET['langue'];

		if ($genre2 == "femme" && $langue == "non") {
			if ($age2 <= 12 ) {
				$msg_c = "Salut petite!";
			}
			elseif ($age2 >= 12 && $age2 <= 18) {
				$msg_c = "Salut l'adolescente!";
			}
			elseif ($age2 >= 18 && $age2 <= 115) {
				$msg_c = "Salut l'adulte!";
			}
			else {
				$msg_c = "Wow! Toujours vivante?";
			}
		}	
		if ($genre2 == "femme" && $langue == "oui") {
				if ($age2 <= 12 ) {
				$msg_c = "Hello Girl";
			}
			elseif ($age2 >= 12 && $age2 <= 18) {
				$msg_c = "Hello Teenage girl!";
			}
			elseif ($age2 >= 18 && $age2 <= 115) {
				$msg_c = "Hello Lady!";
			}
			else {
				$msg_c = "Wow! Still alive, old lady";
			}	
		}
		if ($genre2 == "homme" && $langue == "non") {
			if ($age2 <= 12) {
				$msg_c = "Salut petit!";
			}
			elseif ($age2 >= 12 && $age2 <= 18) {
				$msg_c = "Salut l'ado!";
			}
			elseif ($age2 >= 18 && $age2 <= 115) {
				$msg_c = "Salut l'adult!";
			}
			else {
				$msg_c = "Wow! Toujours vivant?";
			}
		}
		if ($genre2 == "homme" && $langue == "oui") {
			if ($age2 <= 12) {
				$msg_c = "Hello boy!";
			}
			elseif ($age2 >= 12 && $age2 <= 18) {
				$msg_c = "Hello Teenage boy!";
			}
			elseif ($age2 >= 18 && $age2 <= 115) {
				$msg_c = "Hello Sir!";
			}
			else {
				$msg_c = "Wow! Still alive, old man?";
			}
		}

	//Exercice #7 

		$scores = $_GET['score'];
	
			if ($scores == "nul") {
				$resultat = "Ce travaile est nul";
			}
			elseif ($scores == "terrible") {
				$resultat = "Ce travail n'est pas terrible";
			}
			elseif ($scores == "juste") {
				$resultat = "Tout juste!";
			}
			elseif ($scores == "pasmal") {
				$resultat = "C'est pas mal.";
			}
			elseif ($scores == "bravo") {
				$resultat = "Bravo!";
			}
			elseif ($scores == "tricheur") {
				$resultat = "Police! Arrêtez ce tricheur!";
			}
			else{
				$resultat = "Veuillez selectionner votre score";
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
		</ul>
	</nav>
	<div class="jumbotron">
		<h1>PHP: Les conditions</h1>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 1</h3><hr>	
			<p class="text-justify">
				Change la condition pour qu'elle devienne: "si la température est plus grande ou égale à 15 degrés".
				<code>
					<?php echo $vetement_du_jour ?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 2</h3><hr>	
			<p class="text-justify">
				 Représente en code le fait de devoir ranger sa chambre si elle est sale. <br>
				<code>
					<?php echo $msg;?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 3</h3><hr>	
			<p class="text-justify">
				 Affiche un message de salutation différent selon l'heure courante. <br>
				<code>
					<?php echo $message;?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 4</h3><hr>	
			<p class="text-justify">
				 Affiche une salutation différente selon l'âge de l'utilisateur. <br>
				 <form method = "GET" class="form-group">
				 	<label for="age">Quel est votre âge?</label>
				 	<input type="number" name="age" placeholder="Votre age">
				 <code>
					<?php echo $msg_a; ?>
				</code>
				 </form>
			</p>
			<h3 id="inv">Exercice N° 5</h3><hr>	
			<p class="text-justify">
				 Affiche une salutation différente selon l'âge et le genre de l'utilisateur. <br>
				 <form method = "GET" class="form-group">
				 	<label for="age">Quel est votre âge?</label><br>
				 	<input type="number" name="age1" placeholder="Votre age"><br>
				 	<label for="genre">Homme ou Femme?</label><br>
				 	<label for="femme">Femme</label>
				 	<input type="radio" name="genre" value="femme">
				 	<label for="homme">Homme</label>
				 	<input type="radio" name="genre" value="homme"><br>
				 	<input type="submit" value="OK">
				 <code>
					<?php echo $msg_b; ?>
				</code>
				 </form>
			</p>
			<h3 id="inv">Exercice N° 6</h3><hr>	
			<p class="text-justify">
				 Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle. <br>
				<form method = "GET" class="form-group">
				 	<label for="age">Quel est votre âge?</label><br>
				 	<input type="number" name="age2" placeholder="Votre age"><br>
				 	<label for="genre">Homme ou Femme?</label><br>
				 	<label for="femme">Femme</label>
				 	<input type="radio" name="genre2" value="femme">
				 	<label for="homme">Homme</label>
				 	<input type="radio" name="genre2" value="homme"><br>
				 	<label for="langue">Parles-tu anglais?</label><br>
				 	<label for="oui">Yes</label>
				 	<input type="radio" name="langue" value="oui">
				 	<label for="non">Non</label>
				 	<input type="radio" name="langue" value="non">
				 	<input type="submit" value="OK"><br>
				 <code>
					<?php echo $msg_c; ?>
				</code>
				</form>
			</p>
			<h3 id="inv">Exercice N° 7</h3><hr>	
			<p class="text-justify">
				 Retour à l'école de l'échec et du jugement <br>
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
					<?php echo $resultat; ?>
				</code>
				</form>
			</p>						
		</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>