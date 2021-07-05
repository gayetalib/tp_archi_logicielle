

<?php include '../bd.php' ; 
    //  Delete evaluation project
      $num_cat = $_GET["id"];
      $query1 = $bdd -> query("DELETE FROM categorie WHERE id = $num_cat");    
      $query1->execute();

      header('Location: categorie.php');
?>
 