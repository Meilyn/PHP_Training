<?php 

	// Supprimer les caractères inutiles (espace supplémentaire, tabulation, nl) (avec la fonction PHP trim ())
    //Supprimez les barres obliques inverses (\)(avec la fonction PHP stripslashes ())
	
	$num1 = $num2;

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		//Vérification des variables
		$num1 = test($_POST['num1']);
		$num1 = test($_POST['num2']);

	}
	function test($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
			return $data;
	}

	

	

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulaire GET</title>
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
		<i class="fas fa-user-tie">Formulaire POST</i>
	</nav>
	<div class="jumbotron">
		<h1> Calculatrice </h1>
		<p>PHP: Exercice </p>
	</div>
		<form method="POST" class="container" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
 			<div class="form-group">
 				<label for="num1">Numero 1</label><br>
 				<input type="number" name="num1" class="form-control">
 				<label for="num2">Numero 2</label>
		 		<input type="number" name="num2" class="form-control">
 			</div>
 			<button type="submit" class="btn btn-danger" name="submit">Calculer</button><br>
 			<code>
 				<?php 
 					 
 				 ?>
 			</code>
		</form>				
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>