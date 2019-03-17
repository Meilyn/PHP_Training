<?php 
	//Exercice #1
	$famille = ["Patrick", "Robert", "Gabriela", "Wendy"];
	$plats = ["soupe", "nouilles", "chinois", "libanais", "japonais"];
	$film = ["Hidden Figures", "One Piece", "La casa de Papel", "Fight Club"];

	//Exercice #2
	$moi = [
		'naissance'	=> 1990, 
		'prenom' => 'Gally' ,
		'nom' => 'Thomas',
		'hobbies' => [],
		'papa' => $papa
	 ];

	$papa = [
		'prenom' => 'Robert',
		'Nom' => 'Thomas',
		'Naissance' => 1947,
		'aime_foot'	=> true,
		'hobbies' => ["shooting", "sport", "famille", "Journal"],
	];

	$ame_soeur = [
		'prenom' => 'Jochem',
		'Nom' => 'Gys',
		'Naissance' => 1989,
		'hobbies' => ["electricité", "Ciclo Cross", "famille", "Journal", "Manga"],
	];


	//Ajout Hobbies
	array_push($moi['hobbies'],'informatique','Manga','Dessiner');
	array_push($moi['hobbies'], 'Taxidermia'); // Art de préparer, d'empailler les animaux morts

	//Changement de Nom Famille
	$moi['nom'] = 'Dieudonné';

	// les données communs aux deux array [intersect]
	$compatibilite = array_intersect($ame_soeur['hobbies'], $moi['hobbies']);
	// Fusion
	$merge = array_merge($ame_soeur['hobbies'], $moi['hobbies']);

	$web_development =  [
		 'Frontend' =>  [],
		 'Backend' => []
		 ];

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Tableaux</title>
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
			<li class="nav-item">
			    <a class="nav-link" href="function.php">Functions</a>
			</li>
		</ul>
	</nav>
	<div class="jumbotron">
		<h1>PHP: ARRAYS</h1>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N°1</h3><hr>	
			<p class="text-justify">
			Famille <br>
				<code>
					<?php print_r($famille); ?>
				</code><br><br>
			Plats préférés. <br>	
				<code>
					<?php print_r($plats); ?>
				</code><br><br>
			Films & Series préférés. <br>	
				<code>
					<?php print_r($film[1]); ?>
				</code>
			</p>
			<h3 id="inv">Exercice N°2</h3><hr>								
				<code>
					<?php 
						echo '<pre>';
						print_r($moi);
						echo '</pre>';
					 ?>
				</code>
			<h3>Manipulation des tableaux</h3><hr>						
				<code>
					<?php 
						echo "Mon père as " .count($papa['hobbies']). " Hobbies <br>";
						echo "Moi j'ai " .count($moi['hobbies']). " Hobbies <br>";
						echo "Nous avons un total de ";
						echo count($moi['hobbies']) + count($papa['hobbies']). " Hobbies <br>";
						echo "Mon nouvel Nom est " .$moi['nom']. "<br>" ;
					 ?>
				</code><br>
			<h3>Créer un tableau à partir de deux tableaux (ou plus)</h3><hr>				
				<code>
					<?php
						echo "Les hobby communs aux deux array <br>"; 
						print_r ($compatibilite);
						echo "<br><br>";
						echo "Tous les hobby de chaque array <br>";
						print_r($merge);
					 ?>
				</code>
			<h3>$web_development</h3><hr>				
				<code>
					<?php
						array_push($web_development["Frontend"],"xhtml");
							echo "<pre>";
								print_r($web_development);
							echo "</pre>";
						array_push($web_development["Backend"],"Ruby on Rails");
							echo "<pre>";
								print_r($web_development);
							echo "</pre>";
						array_push($web_development["Frontend"],"CSS");
							echo "<pre>";
								print_r($web_development);
							echo "</pre>";
						array_push($web_development["Backend"],"Flash");
							echo "<pre>";
								print_r($web_development);
							echo "</pre>";
						array_push($web_development["Frontend"],"Javascript");
							echo "<pre>";
								print_r($web_development);
							echo "</pre>";
						$web_development["Frontend"][0] = 'html';
							echo "<pre>";
								print_r($web_development);
							echo "</pre>";
						//Effacer Flash
						unset($web_development["Backend"][1]);	
							echo "<pre>";
								print_r($web_development);
							echo "</pre>";

					?>
				</code>				
		</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>