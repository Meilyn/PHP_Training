<?php 
	//Exercice #1 Première lettre de l'argument en majuscule
		function firstCappital($fname){
			echo ucfirst($fname)."<br>";
		}
	//Exercice #2
		function fecha($date){
			echo date('l jS \of F Y ');
		}
	// Exercice #3
		function fecha2($date2){
			echo date('l jS \of F Y H:i:s A');
		}
	//Exercice #4  de 2 arguments
		function sum($num1,$num2){
			$total = $num1 + $num2;
			return $total ."<br>";
		}
	//Exercice #5 Errors Sum
		function suma($num1,$num2){
			$total = $num1 + $num2;
				if((is_integer($num1))&&(is_integer($num2))){
					return $total ."<br>";
				}
				else {
					echo ("Erreur, argument non numérique <br>");
				}
		}
	// Exercice #6 Acronyme
		//ucwords : Convert the first character of each word to uppercase:
		function acronyme($string){
			$abreviation ="";
			$string = ucwords($string);
			$phrase = explode(" ", "$string");
				foreach ($phrase as $phrase) {
					$abreviation .= $phrase[0];
				}
				return $abreviation."<br>";;
		}
	//Exercice #7 Remplacement des lettres ae par æ
		function replaceCharacters($string){
			return str_replace("ae", "æ", $string)."<br>";
		}

	//Exercice #8 Inverse du N°7
		function replaceAB($string){
			return str_replace("æ", "ae", $string)."<br>";
		}
	//Exercice #9 
		function myfunction($msg, $class ="info"){
            return "<div class='$class'>$msg</div>";
        }
        	
     //Exercice #11
     	function string($string){
			return strtolower($string);
		}
	//Exercice #12
		if (isset($_POST['rayon']) AND isset($_POST['hauteur'])) {
           $ray = $_POST['rayon'];
           $haut = $_POST['hauteur'];
            function volumeCone($rayon, $hauteur){
                $volume = $rayon * $rayon * 3.14 * $hauteur *(1/3);
               	"Le volume du cône de rayon ".$rayon. " et de hauteur ".$hauteur." est : " . $volume . ' cm<sup>3</sup><br />';  
            }
            volumeCone($ray, $haut);
       }
       $volume = 5 * 5 * 3.14 * 2 * (1/3);  	   	

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Fonctions</title>
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
		</ul>
	</nav>
	<div class="jumbotron">
		<h1>PHP: Fontions</h1>
	</div>
		<div class="container">
			<h3 id="inv">Exercice N°1</h3><hr>	
			<p class="text-justify">
			Utilise une fonction qui mette la première lettre de l'argument en majuscule. Par ex: si l'input de la fonction est "emile", l'output sera "Emile". <br>
				<code>
					<?php 
					firstCappital('emilie'); 
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°2</h3><hr>	
			<p class="text-justify">
			Utilise la fonction fournie par PHP te permettant d'afficher l'année en cours.<br>
				<code>
					<?php 
					fecha($date); 
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°3</h3><hr>	
			<p class="text-justify">
			Affiche à présent la date, l'heure, les minutes et les secondes, en utilisant la même fonction.<br>
				<code>
					<?php 
					fecha2($date2); 
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°4</h3><hr>	
			<p class="text-justify">
			Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments.<br>
				<code>
					<?php 
					echo "La somme total est: " .sum(10,20);
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°5</h3><hr>	
			<p class="text-justify">
			Améliore la fonction précédente pour que si l'un des (ou les deux) arguments envoyés n'est pas une valeur numérique (int), la fonction retourne le message suivant: "Erreur, argument non numérique".<br>
				<code>
					<?php 
					echo "La somme total est: " .suma(10,"10");
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°6</h3><hr>	
			<p class="text-justify">
			Crée une fonction qui prend en argument une chaîne de caractères (plusieurs mots) et qui retourne les initiales de chaque mot en majuscule. (Exemple: "In code we trust!" devient: ICWT).<br>
				<code>
					<?php 
						echo "Acronyme de 'Helllo World' <br>";
						echo acronyme('Hello World');
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°7</h3><hr>	
			<p class="text-justify">
			Invente une fonction qui remplace les lettres "a" et "e" par le caractère "æ" dans chacune des chaînes suivantes: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca".<br>
				<code>
					<?php 
						echo replaceCharacters("caecotrophie");
						echo replaceCharacters("chaenichthys");
						echo replaceCharacters("microsphaera");
						echo replaceCharacters("sphaerotheca");
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°8</h3><hr>	
			<p class="text-justify">
			Crée la fonction inverse, qui remplace le caractère "æ" par "ae" dans les chaines suivantes: cæcotrophie, chænichthys, microsphæra, sphærotheca. <br>
				<code>
					<?php 
						echo replaceAB('cæcotrophie');
						echo replaceAB('chænichthys');
						echo replaceAB('microsphæra');
						echo replaceAB('sphærotheca');
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°9</h3><hr>	
			<p class="text-justify">
			Crée une fonction te permettant de gérer des messages envers l'utilisateur grâce à deux arguments: le premier argument est le message, le second permet de spécifier un attribut de classe html qui sera utilisée par le CSS (par exemple: "info", "error", "warning"). Grâce à cette fonction, on pourra écrire en php: <br>
				<code>
					<?php 
						echo(myfunction("adresse email incorrecte"));
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°11</h3><hr>	
			<p class="text-justify">
			Convertis la chaîne suivante: "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!" en lettres minuscules.<br>
				<code>
					<?php 
						echo string("ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!");
					?>
				</code>
			</p>
			<h3 id="inv">Exercice N°12</h3><hr>	
			<p class="text-justify">
			 Volume d'un cône<br><br>
			 <form action="" method="POST">
			 	<label for="volume">Volume du Cône</label><br>
			 	<label for="">Rayon</label>
			 	<input type="number" name="rayon"><br>
			 	<label for="">Hauteur</label>
			 	<input type="number" name="hauteur">
			 	<input type="submit"><br>
				<code>
					<?php 
						echo volumeCone($ray, $haut); echo 'Le volume du cône de rayon '.$rayon.' et de hauteur '.$hauteur.' est : ' . $volume . ' cm<sup>3</sup><br />';
					?>
				</code>
			</form>	
			</p>					
		</div>	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>