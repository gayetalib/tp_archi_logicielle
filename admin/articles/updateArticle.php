<?php 
    session_start() ;
    include '../bd.php';
    $_SESSION['id'] = $id  =$_REQUEST['modify']   ;
    $type=$_REQUEST['type'] ;
  

      $req=$bdd->query("SELECT * FROM article WHERE id = '".$id."'");  
      $row=$req->fetchAll(PDO::FETCH_NUM);
   

  
    $test2 =$bdd->query("SELECT * FROM categorie");   
?>
<link rel="icon" type="image/png" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="jep">
  <meta name="author" content="ninjamer">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://cdn.wysibb.com/js/jquery.wysibb.min.js"></script>
	<link rel="stylesheet" href="http://cdn.wysibb.com/css/default/wbbtheme.css" />
	<script>
		$(function() {
  		$("#contenu").wysibb();
		})
	</script>
  <style type="text/css">
    body
    {
      overflow-x: hidden;
    }
  </style>
  
<body>
<form action="./saveUpdate.php" method="post" enctype='multipart/form-data' onsubmit="GO()">
  <input type="hidden" name="contenu" id="hiddenIn">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-auto">
                 <div class="md-form">
                    <i class="fab fa-bandcamp prefix"></i>
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" name="titre" id="titre" required="" value="<?php echo $row[0][1]; ?>">
                </div>
        </div>
    </div>
    <div class="row">
          <div class="col-12">
                <?php 
                // include 'quilleditor.php'; 
                ?>
                 <textarea class="form-control" name="contain" rows="10" id="contenu"><?php echo $row[0][2]; ?></textarea>
          </div>
<div class="row d-flex justify-content-between" style="width: 100%;">  
                     <div class="col-auto">
                              <select class="browser-default custom-select" style="height: 50px;margin-top: 18px;margin-left: 15px;" name="cat">
                              <option selected>Choisir une Catégorie</option>
                              <?php 
                                     while($rep=$test2->fetch())
                                    { 
                              ?> 
                                  <option value="<?php echo $rep['id']; ?>"><?php echo $rep['libelle']; ?></option>
                              <?php 
                                    }
                              ?>
                              </select>
                      </div>
                
                    
               
                      <div class="col-auto offset-md-2" style="margin-top: 15px;">
                            <h2><button type="submit" class="btn btn-success">Mettre à jour</button></h2>
                     </div>
                
</div>
          </div>
    </div>
</div>

<script type="text/javascript">
  function GO() 
  {
    var quillHtml = quill.root.innerHTML.trim();
    document.getElementById('hiddenIn').value = quillHtml;
  }
</script>
</form>
</body>