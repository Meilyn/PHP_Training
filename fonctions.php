<?php 
	//Exercice 1 Faire une fonction qui retourne true.
	
	print_r("<br><br>Function Return True<br>");
	$genre = "female";
	function isFemale($genre){
		if ($genre == "female")
		  return true;
		else 
			return false;
		
	}
	echo isFemale("$genre");

	//Exercice 2 Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
	print_r("<br><br>Exercice Chaine de Caractères<br>");

	function chaineCarac(){
		echo "Hello World";
	}
	chaineCarac();

	//Exercice #3 Faire une fonction qui prend en paramètre deux chaines de caractères (prénom et nom de famille) et qui retourne la concaténation de ces deux chaines.

	print_r("<br><br>Nom & Prénom<br>");

	function nomPrenom($prenom, $nom){
		echo "Je m'appelle $prenom $nom .<br>";
	}

	nomPrenom("Meilyn", "Thomas");
	nomPrenom("Patrick", "Lecovez");

	//Exercice #4 Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

	print_r("<br><br>Nombres<br>");

	function Nombres($num1, $num2){
		if ($num1 >= $num2 ) 
			return $num1;
		elseif($num1 <= $num2) 
			return $num1;			
		elseif ($num1 == $num2) 
			return $num1. " " .$num2;
	}
	echo "le premier nombre est plus grand que le deuxième " .Nombres(10,5). "<br>";
	echo "le premier nombre est plus petit que le deuxième " .Nombres(5,13). "<br>";
	echo "Les deux nombres sont égaux " .Nombres(13,13). "<br>";

//Exercice 5 : Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui retourne la concaténation de ces deux paramètres.

	print_r("<br><br>Concatenation<br>");
	
	function whoIs($fname, $age){
		echo "Mon nom est $fname. J'ai $age ans. <br>";
	}
	whoIs("Meilyn", "29")."<br>";
	whoIs("Kevin", "25")."<br>";

//Exercice #6 nom, prenom et age. Elle doit retourner une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans".

	print_r("<br><br>Concatenation # 2 <br>");

	function whoWeAre($prenom, $nom , $age){
		echo "Bonjour $prenom $nom Tu as $age ans <br>";
}	
	whoWeAre ("Meilyn", "Andrade", "28")."<br>";
	whoWeAre ("Patrick", "Lecovez", "50")."<br>";

//Exercice #7 Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur 

	print_r("<br><br>Genre & Age <br>");

	function genre($age, $genre){
		if($genre == 'femme' && $age >= 18)
			echo "Vous êtes une femme et vous êtes majeur <br>";
		elseif ($genre == 'femme' && $age <=17) 
		 	echo "Vous êtes une femme et vous êtes mineur<br>";
		elseif ($genre == 'homme' && $age >=18) 
			echo "Vous êtes un homme et vous êtes majeur<br>"; 
		else 
			echo "Vous êtes un homme et vous êtes mineur<br>";
	}

	genre("27","femme");
	genre("13", "homme");
	genre("32", "femme");
	genre("10", "femme");

// Exercice 8 Faire une fonction qui prend en paramètre trois nombres et qui retourne la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut
	print_r("<br><br>Trois Nombres <br>");

	
	function troisNum($num1,$num2,$num3){
		return $num1 + $num2 + $num3;
	}	

	echo "La somme de les 3 nombres est = " .troisNum (13, 2, 5)."<br>";
	echo "La somme de les 3 nombres est = " .troisNum (1, 24, 5)."<br>";

 ?>

<!-- Par Meilyn Thomas at BeCode 2019 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fonctions</title>
</head>
<body>
	
</body>
</html>