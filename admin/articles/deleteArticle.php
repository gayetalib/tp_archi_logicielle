
<?php include '../bd.php' ; 
 
      $num_cat = $_GET["id"];
    //   echo $num_cat;
      $query1 = $bdd -> query("DELETE FROM article WHERE id  ='".$num_cat."'");    
      $query1->execute();

      header('Location: article.php');
?>
