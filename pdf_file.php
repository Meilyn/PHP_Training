<?php 
	$DisplayForm = True;
 		if(isset($_POST['submit'])){
 			$DisplayForm = False;
 			echo "Bonjour " .$_POST['civilite']. " " .$_POST['nom'] ." " .$_POST['prenom']." et votre fichier " .$_FILES['userfile']['name'] ." "." ont bien été transmises.";
 		}
 		if($DisplayForm){
	
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF File</title>
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
		<i class="fas fa-user-tie">PDF File</i>
	</nav>
	<div class="jumbotron">
		<h1>PDF File | Formulaires </h1>
		<p>PHP: Exercice 7</p>
	</div>
		<form method="POST" class="container" enctype="multipart/form-data">
			<div class="form-group">
				<label for="civilite">Civilité</label><br>
				<select name="civilite">
					<option value="Monsieur">Mr</option>
					<option value="Madame">Mme</option>
				</select><br>
			</div>
 			<div class="form-group">
 				<label for="nom">Nom</label>
 				<input type="text" name="nom" class="form-control">
 				<label for="prenom">Prénom</label>
		 		<input type="text" name="prenom" class="form-control">
		 		<label for="">Fichier Adjoint</label>
				<input type="file" name="userfile" id="pdf" accept="application/pdf"><br>
 			</div>
 			<button type="submit" class="btn btn-danger" name="submit">Submit</button><br>
		</form>	
		<?php } ?>				
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>