<?php    
     session_start()  ;

     include '../bd.php' ;
     $SESSION['id'] = $id = $_GET['id'];

     $query=$bdd->query("SELECT * FROM categorie WHERE id ='".$id."'");
     $row  =$query->fetchAll(PDO::FETCH_NUM);
?>
<link rel="icon" type="image/png" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="wollogo">
  <meta name="author" content="ninjamer">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

<div class="container">
<br>
    <div class="row">
       <a href="./categorie.php"><i class="far fa-arrow-alt-circle-left" style="font-size:40px;color:orange"></i></a>
    </div>   
		<div class="row d-flex justify-content-center">
			   <div class="col-auto" style="font-weight: bold;">
			   		 <i class="fas fa-database"></i>&nbsp;&nbsp;Modification de catégorie
			   </div>
		</div><br><br>
         <div class="row d-flex justify-content-center">
            <form action="saveUpdate.php?id=<?php echo $id;?>" method="POST">
               <input type="hidden" name="ID" value="<?php echo $id; ?>">
              
                <div class="md-form">
                    <label for="titre">Nom ...</label>
                    <input type="text" class="form-control" name="cat" id="titre" value="<?php echo $row[0][1]; ?>" required>
                </div>
                <br><br>
               
                <button type="submit" class="btn btn-success">Modifier</button>
             </form>
         </div>  
</div>