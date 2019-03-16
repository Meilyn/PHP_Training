<?php 
	// Create a cookie
	//Securise avec la méthode httpOnly(dernier true)
	setcookie('email', $_POST['email'],time() + 365*24*3600, null, null, false, true);
	setcookie('mdp', $_POST['mdp'],time() + 365*24*3600, null, null, false, true);

	//Validate Form Data With PHP htmlspecialchars à été utilisée pour securiser le formulaire 
	//Supression du character inutiles(space supplementaire, tab , nl [avec function TRIM])
	//Supression des barres obliques inverses (\) avec function stripslashes
	$email = $mdp = "";

	if ($_SERVER['REQUEST_METHOD']== "POST"){
		$email = validate($_POST['email']);
		$mdp = validate($_POST['mdp']);
	}

	//2éme étape function qui effectuera toutes les vérification.

	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Variables superglobales, sessions et cookies</title>
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
		<i class="fas fa-user-tie"> SESSIONS</i>
	</nav>
	<div class="jumbotron">
		<h1>Formulaire</h1>
		<p>Validation du formulaire / Stockage d'un cookie</p>
	</div>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="container">
			<div class="form-group">
				<label for="email">Email Adresse</label><br>
				<input type="email" class="form-control" placeholder="Votre email" name="email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
 			<div class="form-group">
 				<label for="mot de passe">Mot de passe</label>
 				<input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
 			</div>
 			<button type="submit" class="btn btn-danger">Submit</button><br>
		</form>
	</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>