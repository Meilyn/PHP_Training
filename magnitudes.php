<?php 
	

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$magnitude = $_POST['magnitude'];
	$message = "";

		switch ($magnitude) {
			case 1:
				$message = "Micro-séisme impossible à ressentir.";
				break;
			case 2:
				$message = "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
			case 3:
				$message = "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
				break;	
			case 4:
				$message = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
				break;
			case 5:
				$message = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";	
				break;	
			case 6:
				$message = "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
				break;
			case 7:
				$message = "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";	
				break;
			case 8:
				$message = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
				break;		
			default:
				$message = "Séisme capable de tout détruire sur une très vaste zone.";
				break;
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
		<i class="fas fa-user-tie">Magnitude</i>
	</nav>
	<div class="jumbotron">
		<h1>Magnitudes</h1>
		<p>PHP:  Les Conditions </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 4</h3><hr>	
			<p class="text-justify">
				<form class="form-group" method="POST">
				<label for="Magnitude">Magnitude</label>
				<input type="text" name="magnitude"  placeholder="échelle de 1 à 9">
				<input type="submit" name="submit"><br>
				<?php echo $message; ?>
				</form>
			</p>
		</div>			
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>