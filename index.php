<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion des articles</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
       
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Gestion d'articles</a>
                <img src="./assets/images/logo_esp.jpg" class="rounded-circle" alt="logo ESP" width="90px" height="85px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>      
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Architecture logicielle</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>




       <div class="container">
           <div class="row">
               <div class="col-md-3">
                  <ul style="background-color:#5f6368">
                      <p>Liste des catégories</p>
                       <?php 
                             include "./bd.php";
                             $categories = $bdd->query("SELECT * FROM categorie");     
                              while( $rep = $categories->fetch()){ ?>
                              <li class="nav-item"><a class="nav-link" href="#!"><span style="color:white"><?php 
                                echo $rep['libelle']?> </span> </a></li> <?php
                             }
        
                       ?>
                    
                  </ul>
               </div>

               <div class="col-md-9">
                     <!-- Liste des artciles -->
                     <div class="container marketing">
                          <h3 style="text-align:center">Liste des Articles</h3>
                          <hr>
                      <div class="row" >
                        <?php 
                              $articles = $bdd->query("SELECT * FROM article");     
                              while( $rep = $articles->fetch()){ ?>
                              <div class="col-lg-4" height="90px">
                                <!-- <img class="rounded-circle" src="./assets/images/edit-solid.svg" width="50" height="50"> -->
                                <h2><?php echo $rep['titre']?></h2>
                                <p><?php echo $rep['contenu']?><p>
                                <?php
                                     $query = $bdd->query("SELECT libelle FROM categorie WHERE id = '".$rep['categorie']."'");
                                ?>
                                <a class="btn btn-secondary" href="#" role="button">Catégorie : <?php echo ($query->fetch())[0]; ?></a></p>
                              </div>

                             <?php 
                                
                               
                             }
        
                        ?>
                        
                        
                
                      </div>
         


                    
               </div>
                
           </div>
       </div>

      
    


        <footer class="py-3 bg-dark" >
            <div class="container"><p class="m-0 text-center text-white">Amadou GAYE - DIC2 Info </p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
