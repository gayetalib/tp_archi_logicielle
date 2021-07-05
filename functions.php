<?php

// ------------------------------- Catégories ---------------------------------------
  function insert_categories($x1){
    // $bdd=get_connexion();
    include "bd.php";
    $req =  $bdd->prepare("INSERT INTO categorie (libelle) VALUES(?)");
    $req->execute(array($x1));
  }

  function update_categories($x1, $x2, $x3, $x4, $x5){
    // $bdd=get_connexion();
    include "bd.php";
    $req =  $bdd->prepare("INSERT INTO porteurs (nom, specialisation, departement, tel, email, photo, respo, id_projet) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8));
  }

  function read_categories(){
    // $bdd=get_connexion();
    include "bd.php";
    $query = $bdd->query("SELECT * FROM categorie");
	$rows  = $query->fetch(PDO::FETCH_NUM); 
  }

  
  function delete_categories($x1, $x2, $x3, $x4, $x5){
    // $bdd=get_connexion();
    include "bd.php";
    $req =  $bdd->prepare("INSERT INTO porteurs (nom, specialisation, departement, tel, email, photo, respo, id_projet) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8));
  }


// ------------------------------- Articles ---------------------------------------


  function insert_comptes($x1, $x2, $x3){   
    // $bdd=get_connexion();
    include "bd.php";
    $pass = password_hash($x2, PASSWORD_DEFAULT);
    $req =  $bdd->prepare("INSERT INTO comptes (username, password, nom_equipe) VALUES(?, ?, ?)");
    $req->execute(array($x1, $pass,$x3));

  }
 
  //Insertition des projets
  function insert_projet($x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8){
    // $bdd=get_connexion();
    include "bd.php";
    $req =  $bdd->prepare("INSERT INTO projets (nom_projet, secteur, cible, problem, solution, complement,
     nouveau, id_compte) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8));
  }


    function insert_members($x1, $x2, $x3, $x4, $x5, $x7, $x8){
    include "bd.php";
    $req =  $bdd->prepare("INSERT INTO porteurs (prenom, email, tel, classe, departement, id_comptes, sexe) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($x1, $x2, $x3, $x4, $x5, $x7, $x8));
    }

?>