<?php

session_start()  ;

include '../bd.php' ;
   
   $id          = $_REQUEST['id']   ;
   $nom         = $_REQUEST['cat']        ;
   
   $up = $bdd->prepare("UPDATE categorie SET libelle = ?  WHERE id = '".$id."'");
   $up->execute(array($nom));
 
   header('Location: categorie.php');

  session_destroy();
?>