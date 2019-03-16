<?php 

	//Using the above code has security implications. The client can set all HTTP header information (ie. $_SERVER['HTTP_...) to any arbitrary value it wants. As such it's far more reliable to use $_SERVER['REMOTE_ADDR'], as this cannot be set by the user

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ // Proxies
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR']; //Actual physical IP address 
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
		<i class="fas fa-user-tie"> Exercice #1</i>
	</nav>
	<div class="container">
		<form action="" method="POST">
			<h1><strong>PHP:</strong> Variables superglobales, sessions et cookies</h1>
			<div class="form-group container ">
				<label for="User Agent" ><strong>User Agent</strong></label><br>
				<?php echo $_SERVER['HTTP_USER_AGENT']; ?><br><br>
				<label for="Adresse IP"><strong>Adresse IP</strong></label><br>
				<?php echo $ip ?><br><br>
				<label for="Serveur"><strong>Serveur</strong></label><br>
				<?php echo $_SERVER['SERVER_NAME']; ?>
			</div>
			
		</form>
		
	</div>
	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>