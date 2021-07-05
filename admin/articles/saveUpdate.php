<?php

session_start()  ;

include '../bd.php' ;
    $id = $_SESSION['id'];
    $titre=$_POST['titre'];
    $categorie=$_POST['cat'];
  
    $contenu=$_POST['contain'];
    $date = date('d-m-y');
 
   $up = $bdd->prepare("UPDATE article SET titre =?, contenu  =? , dateModification = ?, categorie = ? WHERE id = '".$id."'");
   $up->execute(array($titre,$contenu,$date,$categorie));

   header('Location: article.php');
?>
