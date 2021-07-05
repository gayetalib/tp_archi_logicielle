<?php
include "../bd.php";
	

	$nom=$_POST['cat'];

	$sql=$bdd->prepare('INSERT into categorie (libelle) VALUES (?)');
	$sql->execute(array($nom));

  header('Location: categorie.php');
?>


