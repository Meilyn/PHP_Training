<?php 
	//Exercice #1
	$pronoms_personnels = ['Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils'];

	//Exercice #3
	$collegues = ["Dorian", "Mustafa", "Patrick", "Cat", "Dorothée", "Perry"];

	//Exercice #4
	$country = ['Honduras','Belgium','Holland','Japan','Mexico','China','Korea','Canada','Roumanie','Brasil'];
	
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Boucles (Loops)</title>
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
		<i class="fas fa-user-tie">PHP TRAINING</i>
	</nav>
	<div class="jumbotron">
		<h1>PHP: Les Boucles (Loops)</h1>
	</div>
		<div class="container">
			<h3 id="inv">Conjuge le verbe "coder"</h3><hr>	
			<p class="text-justify">
				<code>
					<?php 
						foreach ($pronoms_personnels as $value) {
							if ($value == 'Je') {
						        echo "<p>" .$value. " code</p>";
						    } elseif ($value == 'Tu') {
						        echo "<p>" .$value. " codes</p>";
						    } elseif ($value == 'Il/Elle') {
						        echo "<p>" .$value. " code</p>";
						    } elseif ($value == 'Nous') {
						        echo "<p>" .$value. " codons</p>";
						    } elseif ($value == 'Vous') {
						        echo "<p>" .$value. " codez</p>";
						    } else{
						        echo "<p>" .$value. " codent</p>";
						    }
						}
					?>
				</code><br>
			</p>
			<h3 id="inv">Construction While</h3><hr>	
			<p>
				Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  while
				<code>
					<?php 
						while ($i <= 120) {
							echo $i . "|";
							$i++;
						}	
					?>
				</code><br>
			</p>
			<h3 id="inv">Construction For</h3><hr>	
			<p>
				Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  for
				<code>
					<?php 
						for ($n = 1; $n  <= 120 ; $n ++) { 
							echo $n ."|";
						}						
					?>
				</code><br>
			</p>
			<h3 id="inv">Exercice N° 3</h3><hr>	
			<p>
			Crée un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une boucle. <br>
				<code>
					<?php 
						foreach ($collegues as $pronom) {
							echo $pronom ."|";
						}							
					?>
				</code><br>
			</p>
			<h3 id="inv">Exercice N° 4</h3><hr>	
			<p>
			Crée un tableau contenant au moins 10 pays du monde. Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html. <br>
			<form>
				<label for="pays">Votre Pays</label><br>
					<select value = "country">
						<option value="">Veuillez selectioner un pays</option>
				<code>
					<?php 
						foreach ($country as $value) {
							echo "<option> $value </option>";
						}						
					?>
				</code><br>
					</select>
			</form>	
			</p>				
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>