<?php

try
{
   $bdd = new PDO('mysql:host=localhost;dbname=demo;charset=utf8', 'root', 'root'); 
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$link = mysqli_connect("localhost", "root", "root", "demo");

if($link === false){
    die("Impossible de se co" . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
$sql = "INSERT INTO tabletest (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Envoi du formulaire réussi !";
} else{
    echo "erreur $sql. " . mysqli_error($link);
}
$reponse =  $bdd->query('SELECT * FROM tabletest ORDER BY RAND() LIMIT 1');
 while ($donnees = $reponse->fetch()) {
      echo $donnees['first_name'] ;
 }



mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Jeu</title>
</head>
<body>
	<h1>Bonjour <?php
		echo $_POST['first_name'] ;
		?>
	</h1>
	<h2>
		Qui a le permis ?
	</h2>
	<div class="choix">
		<div class="choixmulti choix1"></div>
		<div class="choixmulti choix2"></div>
		<div class="choixmulti choix3"></div>
	</div>
</body>
</html>