<?php 
	$date1 = date("d/m/Y");
	$date2 = date("d-m-Y");
	$date3 = date("jS F Y");
	// Timestamp  2 august 2016 à 15h00
	$date4 = strtotime('2016/02/08 15:00:00');
	// Calculer les jours entre le 16 mai 2016 et aujourd'hui.
	// Convertir en timestamp
	$date_m = date('04/16/2016');
	$date_n = date("m/d/Y"); 
	$date_m = strtotime($date_m);
	$date_n = strtotime($date_n);
	// On récupère la différence de timestamp entre les 2 précédents
	$nombre_jours =  $date_m - $date_n;
	// ** Pour convertir le timestamp (exprimé en secondes) en jours **
	$nbJours = $nombre_jours/86400;
	$JoursFev = date("t", mktime(0, 0, 0, 2, 1, 2017)); 
	$plusJour = date('jS F Y',strtotime("+20 day"));
	$moinsJour = date('jS F Y', strtotime("-20 day"));

	//Generation de Mois & Année
	// $year = date('Y');

    $mois = [ 
   	  "1" => "January", "2" => "February", "3" => "March", "4" => "April",
      "5" => "May", "6" => "June", "7" => "July", "8" => "August",
      "9" => "September", "10" => "October", "11" => "November", "12" => "December",
  	];


 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Dates</title>
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
		<i class="fas fa-user-tie">Dates</i>
	</nav>
	<div class="jumbotron">
		<h1>Dates</h1>
		<p>PHP: Les dates </p>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N° 1</h3><hr>	
			<p class="text-justify">
				Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 23/06/2017). <br>
				<code>
					<?php echo $date1; ?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 2</h3><hr>	
			<p class="text-justify">
				Afficher la date courante en respectant la forme jj-mm-aa (ex : 23-06-17). <br>
				<code>
					<?php echo $date2; ?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 3</h3><hr>	
			<p class="text-justify">
				Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016). <br>
				<code>
					<?php 
					setlocale(LC_TIME, "fr_FR");
					echo strftime("$date3");
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 4</h3><hr>	
			<p class="text-justify">
				Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00. <br>
				<code>
					<?php 
					echo $date4;
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 5</h3><hr>	
			<p class="text-justify">
				Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.<br>
				<code>
					<?php 
					echo $nbJours;
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 6</h3><hr>
			<p class="text-justify">
				Afficher le nombre de jour dans le mois de février de l'année 2017.<br>
				<code>
					<?php 
						echo $JoursFev;
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 7</h3><hr>
			<p class="text-justify">
				Afficher la date du jour + 20 jours.<br>
				<code>
					<?php 
						echo $plusJour;
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N° 8</h3><hr>
			<p class="text-justify">
				Afficher la date du jour - 20 jours.<br>
				<code>
					<?php 
						echo $moinsJour;
					?>
				</code>
			</p>
			<h3 id="inv">TP</h3><hr>
			<p class="text-justify">
				Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. En fonction des choix, afficher un calendrier comme celui-ci :<br>
				<form action="" method="POST">
					<div class="form-group">
    					<label for="month">Mois</label><br>
    					<select class="form-control" name="month">
					      <option value="">Selection mois</option>
					      <?php 
					      	foreach ($mois as $moisNum => $month) {
					      		echo "<option>$month</option>";
					      	}
					       ?>
					    </select> 
					    <label for="year">Année</label><br>
    					<select class="form-control" name="year">
					      <option value="">Selection année</option>
					      <?php 
					      		for ($year = 1990; $year <= 2020 ; $year++) { 
									echo "<option>$year</option>";
								}
					       ?>
    					</select> 
    				</div>
				</form>
			</p>
		</div>			
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>