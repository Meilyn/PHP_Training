<?php 
	// Exercice 2
	$ic = 0;
	$num = 25;
	//Exercice 3
	$numA = 100;
	$numB = 14;
	//Exercice 4
	$inc = 1;
	//Exercice 5
	$inC = 1;
	//Exercice 6
	$Index = 0;
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Boucles</title>
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
		<i class="fas fa-user-tie">Boucles</i>
	</nav>
	<div class="jumbotron">
		<h1>Boucles | Loops </h1>
		<p>PHP: Les Boucles</p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 1 || For </h3><hr>	
			<p class="text-justify">
				Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut :l'afficher .- l'incrementer <br>	
			</p>
			<code>
				<?php 
					for ($i = 0; $i <=10 ; $i++) { 
						echo $i ."|";
					}
				 ?>
			</code> <br><br>	 
			<h3 id="inv">Exercice N° 2 || While </h3><hr>	
			<p class="text-justify">
				multiplier la première variable avec la deuxième, afficher le résultat, incrementer la première variable<br>	
			</p>
			<code>
				<?php 
				while ($ic <= 20) {
					echo $ic * $num ."|";
					$ic++;
					}	
				 ?>
			</code><br><br>
			<h3 id="inv">Exercice N°3</h3><hr>	
			<p class="text-justify">
				multiplier la première variable avec la deuxième, afficher le résultat, incrementer la première variable<br>	
			</p>
			<code>
				<?php 
				while ($numA <= 10){
					echo $numA * $numB ."<br>";
					$numA--;
					}	
				 ?>
			</code><br>
			<h3 id="inv">Exercice N°4</h3><hr>	
			<p class="text-justify">
				incrementer de la moitié de sa valeur<br>	
			</p>
			<code>
				<?php 
				 while ($inc <= 10) {
					echo $inc * 0.5 ."|";
					$inc++;
				}		
				 ?>
			</code><br><br>
			<h3 id="inv">Exercice N°5</h3><hr>	
			<p class="text-justify">
				En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. Combien de fois le message s'affiche-il ?
			</p><br>
			<code>
				<?php 
				while ($inC <= 15) {
					echo "On y arrive presque". " " .$inC. "|";
					$inC++;
				}		
				 ?>
			</code><br><br>
			<h3 id="inv">Exercice N°6</h3><hr>	
			<p class="text-justify">
				En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. Combien de fois le message s'affiche-il ?
			</p><br>
			<code>
				<?php 
				while ($Index <= 20) {
					echo "  C'est presque bon..". " " .$Index. "|";
					$Index++;
				}		
				 ?>
			</code><br><br>
			<h3 id="inv">Exercice N°7</h3><hr>	
			<p class="text-justify">
				En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. Combien de fois le message s'affiche-il ?	
			</p><br>
			<code>
				<?php 
					for ($index = 0; $index <=100 ; $index ++) { 
						echo "On tient le bon bout " .$index * 15 ."|";
					}	
				 ?>
			</code><br><br>	
			<h3 id="inv">Exercice N°8</h3><hr>	
			<p class="text-justify">
				En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. Combien de fois le message s'affiche-il ?
			</p><br>
			<code>
				<?php 
					for ($in = 0; $in <= 200 ; $in++) { 
						echo "En FIN!!! " .$in * 12 ."|";
					}	
				 ?>
			</code><br><br>					 		 
		</div>			
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>