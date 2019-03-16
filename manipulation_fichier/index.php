<?php 

	$texte = "Mon 1ér essaie";
	$fp = fopen("texte.txt","a");
	fwrite($fp, "$texte"); 
	fclose($fp);

	$fp = fopen("texte.txt","r");

	while(!feof($fp)) { 
		$fichier_texte = fgets($fp,1024); 
		echo "$fichier_texte"; 
	} 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Variables superglobales, sessions et cookies</title>
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
		<i class="fas fa-user-tie"> Manipulation Fichier</i>
	</nav>
	<div class="jumbotron">
		<h1>Manipulation Fichier </h1>
		<p>avec PHP</p>
	</div>
		<div class="container">
			<i class="fas fa-file-signature fa-5x"></i>
			<button type="button" class="btn btn-danger">Open File <?php "texte.txt" ?></button>
		</div>
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>