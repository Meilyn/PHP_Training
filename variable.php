<?php 
	
	//Exercice #1
	$nom = "Andrade";
	$prenom = "Meilyn";
	$age = 28;
	$message = "";

	//Exercice #3
	$string = "Ik ben een kind van de duivel";
	$born = 1993;
	$poid = 60.5;
	$futbol = false;

	//Exercice #5
	$sum = 3 + 4;
	$mul = 5 * 20;
	$div = 45 / 5;

	// Exercice #6
	$shirt = 785;
	$pourcentage = 30;
	$discount = ($shirt * $pourcentage)/100;
	$finalprice = $shirt - $discount;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Variables</title>
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
		<i class="fas fa-user-tie"> All exercices</i>
	</nav>
	<div class="jumbotron">
		<h1>Exercice 1 au 6</h1>
		<p>PHP:  Les Variables </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 1</h3><hr>	
			<p class="text-justify">
			<code>	
			<?php 
	 		echo $message = "Bonjour  $prenom, enfant de la famille $nom ayant atteint de l'age de $age !<br>";
			?>
			</code>
	 		</p>
	 		<h3 id="inv">Exercice N° 2</h3><hr>	
	 		 <p class="text-justify">
	 		 	<code>
	 		 	<?php 
	 		 		$km = 1;
	 		 		echo $km ."<br>";
					$km = 3;
					echo $km ."<br>";
					$km = 125;
					echo $km ."<br>";
	 		 	 ?>
	 		 	</code> 
	 		 </p>
	 		 <h3 id="inv">Exercice N° 3</h3><hr>
	 		 <p class="text-justify">
	 		 	<code>
	 		 	<?php 
	 		 		echo "Hallo, $string I'm born in $born. My weight is $poid and i don't like the futbol $futbol";
	 		 	 ?>
	 		 	</code>
	 		 </p>
			 <h3 id="inv">Exercice N° 4</h3><hr>
			 <p class="text-justify">
			 	<code>
			 <?php 
			 	$var = "Hallo";
			 	echo "VarString = " .$var. "<br>";
			 	$var = 28;
			 	echo "VarInteger = " .$var. "<br>";
			 	$var = 75.54;
			 	echo "VarFloat = " .$var. "<br>";
			 	$var = true;
			 	echo "VarBoolean = " .$var. "<br>";
			  ?>
			</code>
			  </p>
			  <h3 id="inv">Exercice N° 5</h3><hr>
			  <p class="text-justify">
			  	<code>
			  	<?php 
			  		echo "Somme = " .$sum. "<br>".
			  		"Multiplication = " .$mul. "<br>".
			  		"Division = " .$div. "<br>";
			  	 ?>
			  	</code>
			  </p>
			  <h3 id="inv">Exercice N° 6</h3><hr>
			  <p class="text-justify">
			  	<code>
			  	<?php 
			  		echo "The original price of the T-shirt is " . $shirt. "€"."<br>"."The discount is " .$discount. "€". "<br>The Final Price is " .$finalprice. "€";
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