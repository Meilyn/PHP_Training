<?php 
	

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