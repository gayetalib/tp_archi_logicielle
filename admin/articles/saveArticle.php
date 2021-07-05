<?php
    include "../bd.php";

    $titre=$_POST['titre'];
    $categorie=$_POST['cat'];
    
    $contenu=$_POST['contain'];
    $date = date('d-m-y');
   
    //Uploader image
   
    $filename = $_FILES['image_article']['name']   ;
    var_dump($filename);
    $tmpName = $_FILES["image_article"]["tmp_name"]   ;
    $location = "./../uploads/";
    move_uploaded_file ($tmpName ,$location.$filename) ;

    $im=$filename;
   
    

    $sql=$bdd->prepare("INSERT into article (titre, contenu, dateCreation, categorie) VALUES (?,?,?,?)");
    $sql->execute(array($titre,$contenu, $date ,$categorie));

    header('Location: article.php');


?>
