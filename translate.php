<?php 
	
	//Exercice N°5
	$deV = $_POST['genre'];
	$message = "";

	if(isset($_POST['genre']))	{
		if ($deV != 'homme') {
			$message = "C'est une Développeuse!!!";
		}
		else {
			$message = "C'est une Développeur!!!";
		}
	}	

	//Exercice N°6

	$monAge = $_POST['age'];
	$txt = "";

	if(isset($_POST['age'])){
		if ($monAge >= 18) {
			$txt = "Tu es majeur";
		}
		else {
			$txt = 'Tu n\'es pas majeur';
		}
	}	

	//Exercice N°7
	$myVar = "true";
	$message3 = "";

	if ($myVar == 'false') {
		$message3 = 'c\'est pas bon !!!';
	}
	else {
		$message3 = 'c\'est ok !!';
	}

	//Exercice N° 8
	$myVar = "false";
	$message4 = "";

	if ($myVar != 'true') {
		$message4 = 'c\'est pas bon !!!';
	}
	else {
		$message4 = 'c\'est ok !!';
	}


 ?>
<!DOCTYPE html>
<html lang="en">
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
		<i class="fas fa-user-tie">Translate</i>
	</nav>
	<div class="jumbotron">
		<h1>Translate Way</h1>
		<p>PHP: Les conditions </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 5</h3><hr>	
			<p class="text-justify">
				<form class="form-group" method="POST">
				<label for="homme">Homme</label>
				<input type="radio" name="genre" value="homme">
				<label for="femme">Femme</label>
				<input type="radio" name="genre" value="femme">
				<input type="submit" name="submit"><br>
				<code>
					<?php echo $message; ?>
				</code>	
				</form>
			</p>
			<h3 id="inv">Exercice N° 6</h3><hr>
			<p class="text-justify">
				<form method="POST" class="form-group">
					<label for="age">Veuillez Int. votre age</label><br>
					<input type="text" name="age">
					<input type="submit"><br>
					<code>
						<?php echo $txt; ?>
					</code>	
				</form>
			</p>
			<h3 id="inv">Exercice N° 7</h3><hr>	
			<code class="text-justify">
				<?php
  				echo $message3;
				?>
			</code>
			<h3 id="inv">Exercice N° 8</h3><hr>	
			<code class="text-justify">
				<?php
  				echo $message4;
				?>
			</code>
		</div>			
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>