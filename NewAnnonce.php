<?php

session_start();

require("./Config/config.php");




  $id = $_GET["id"];

  $sql = "SELECT * FROM annonce WHERE id='$id' ";
  $stmt = $conn->prepare($sql); 
  
  $stmt->execute();
  $result = $stmt->get_result();





    /* update annonce */










?>


<?php  foreach($result as $item): ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brocante</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,800%7COpen+Sans:400,400i,700" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="mdb.min.css">    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>



  <?php
  if(isset($_SESSION["user_id"])){
      require("./Composants/Nav2.php") ;
}
else{
    require("./Composants/Nav.php") ;
}
   
   ?>

 <!-- detail border card -->
 
 




    <form action="./Functions/ModifierAnnonce.php" method="post"  >

        <div class="container">
            
            
            <div class="annonceProfile">
                <input type="number" value="<?= $item["prix"]  ?>" name="prix" id="prix"> 
                <button type="submit" name="submit" class="btn btn-success" style="width : 80%" >Modifier l'annonce</button>
                <a style="width : 80%" class="btn btn-danger" href="index2.php">annuler</a>
                
            </div>
            <div class="produitImg">
                <img src="./img/<?=  $item["filename"]  ?>" alt="" srcset="">

            </div>
            <div class="produitTitre">
            <input  value="<?=  $item["titre"] ?>" name="titre" type="text" id="form2Example18" class="form-control form-control-lg" />
                
            </div>
            <div class="produitDescription">
                <h4 >Descritpion  </h4>
                <textarea    name="description" class="form-control" id="textAreaExample" rows="4"><?=  $item["description"] ?></textarea>
            </div>
            
            <div class="map">
            <h4><i class="fa-sharp fa-solid fa-location-dot"></i> <input type="text" name="postal" value="<?= $item["postal"]  ?>" ></h4>
                <div style="overflow:hidden;width: 676.9px;position: relative;"><iframe width="676.9" height="260" src="https://maps.google.com/maps?width=676.9&amp;height=260&amp;hl=en&amp;q=<?= $item["postal"]  ?>+(Titre)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/es/">embedgooglemaps ES</a> & <a href="https://theimpossiblequiz.info/the-impossible-quiz-2/">https://theimpossiblequiz.info/the-impossible-quiz-2/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                </div>
                
        
            </div>
        </form>
            
            
            
            
            
            
            
            
            <!-- footer section -->
            
            <?php  require("./Composants/Footer.php")  ?>
            <script src="mdb.min.js"></script>
            <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
        </body>
        
        </html>
        <?php endforeach ?>