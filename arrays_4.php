<?php 
	$invite = ['Alex',
		'Max',
		'Dominique',
		'Claude',
		'Leslie',
		'Charlie',
		'Lou',
	];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arrays</title>
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
		<i class="fas fa-user-tie">Exercice # 4 [arrays] </i>
	</nav>
	<div class="jumbotron">
		<h1>Les Tableaux</h1>
		<p>avec PHP</p>
	</div>
		<div class="container">
			<h3 id="inv">Invitation</h3><hr>
			<p class="text-justify">
			<code>
				<?php  
					foreach ($invite as $key => $prenom) {
			 			echo $mail = "Salut " .$prenom. " " ."devine quoi ! Je me marie samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)<br><br>";
			 		}		 
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