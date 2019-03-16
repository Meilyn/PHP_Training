<?php 
	// page2.php
	// Start the session
	session_start();

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
		  <a class="nav-link active" href="index.php">Home</a>
  		  <a class="nav-link" href="page2.php">Page</a>
	</nav>
	<div class="jumbotron">
		<h1>
			<?php 
				echo $message = "Votre nom est " .$_SESSION['nom']. "<br>".
				"Votre prènom est ".$_SESSION['prenom']. "<br>".
				"Votre age est " .$_SESSION['age']. "<br>";
			 ?>
		</h1>
	</div>
	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>