<?php 
	$nom = $prenom = "";
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$nom = test_input($_POST['nom']);
			$prenom = test_input($_POST['prenom']);
		}
	function test_input($data){
		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  			return $data;		
	}

	//Validation nom & prenom
	$nom = test_input($_POST["nom"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
			$nomErr = "Only letters and white space allowed"; 
		}
	$prenom = test_input($_POST["prenom"]);	
	if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
			$preErr = "Only letters and white space allowed"; 
		}		

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulaire POST</title>
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
		<h1>Formulaire POST | Formulaires </h1>
		<p>PHP: Exercice 2</p>
	</div>
		<form method="POST" class="container" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
			<code>
 				<?php 
 					echo $_POST['civilite']. " " .$_POST['nom'] ." " .$_POST['prenom'];	
 				 ?>
 			</code>
 			<div class="form-group">
				<select name="civilite">
					<option value="Mr">Mr</option>
					<option value="Mme">Mme</option>
				</select><br>
 				<label for="nom">Nom</label><br>
 				<input type="text" name="nom" class="form-control">
 				<code>
 					<?php echo $nomErr; ?>
 				</code><br>
 				<label for="prenom">Prénom</label><br>
		 		<input type="text" name="prenom" class="form-control">
		 		<code>
		 			<?php echo $preErr; ?>
		 		</code>
 			</div>
 			<button type="submit" class="btn btn-danger" name="submit">Submit</button><br>
		</form>				
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>