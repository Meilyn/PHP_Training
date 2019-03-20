<?php 
	
	//Exercice #1
	$age1 = $_POST['age1'];
	$ageM = "";

	if(isset($_POST['age1'])){
		if ($age1 >= 18){
			$ageM = "Vous êtes Majeur <br>";
		}
		else {
			$ageM = "Vous êtes Mineur <br>";
		}
	};	

	//Exercice #2
	$IsEasy = $_POST['IsEasy'];
	$txt = "";

	if(isset($_POST['IsEasy'], $txt)){

		if ($IsEasy == true ) {
				$txt = "C'est Facile!";
			}	
			else {
				$txt = "C'est Difficile!";
			}
	}		

	//Exercice #3
	if ($_SERVER['REQUEST_METHOD']=== 'POST') {

			$genre = $_POST['genre'];
			$age = $_POST['age'];
			$message = ""; 

		if(isset($_POST['genre'], $_POST['age'], $message))	{
			if ($genre == 'femme' && $age >= 18){
				$message = "Vous êtes une femme et vous êtes majeur";
			} else {
				$message = "Vous êtes une femme et vous êtes mineur";	
			} if ($genre == 'homme' && $age >= 18) {
				$message = "Vous êtes un homme et vous êtes majeur";
			} else {
				$message = "Vous êtes un homme et vous êtes mineur";
			}
		}	
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
		<i class="fas fa-user-tie"> Short exercices</i>
	</nav>
	<div class="jumbotron">
		<h1>Exercice 1 au 3</h1>
		<p>PHP:  Les Conditions </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 1</h3><hr>	
			<p class="text-justify">
				<form class="form-group" method="POST">
					<label for="Age">Votre âge:</label><br>
					<input type="text" name="age1">
					<input type="submit" value="OK"><br>
					<code>
						<?php echo $ageM; ?>
					</code>	
				</form><br>	<hr>
			<h3 id="inv">Exercice N° 2 | IsEasy?</h3><hr>
				<form class="form-group" method="POST">
					<select name="IsEasy">
						<option>It's Easy or not?</option>
						<option value="true">True</option>
						<option value="false">False</option>
					</select>
					<input type="submit" value="OK"><br>
					<code>
						<?php echo $txt; ?>
						<?php echo ($IsEasy == false) ? "C'est Difficile!" : "C'est Facile!";?>
					</code>	
				</form><br>
			<h3>Exercice N° 3 </h3><hr>
			<p>Veuillez choisir votre genre et age!</p>	
				<form method="POST" class="form-group">
					<input type="radio" value="homme" name="genre">
					<label for="Homme">Homme</label><br>
					<input type="radio" value="femme" name="genre">
					<label for="Femme">Femme</label><br>
					<input type="text" name="age" placeholder="Vôtre age">
					<input type="submit" value="OK"><br>
					<code>
						<?php echo $message; ?>
					</code>	
				</form>		 
		</div>
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>