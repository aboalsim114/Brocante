<?php

session_start();

require("./Config/config.php");




  $id = $_GET["id"];

  $sql = "SELECT * FROM annonce WHERE id='$id' ";
  $stmt = $conn->prepare($sql); 
  
  $stmt->execute();
  $result = $stmt->get_result();






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
 
 
 <div class="productPage">
        <div class="productTitre">
            <h1><?=  $item["titre"]  ?></h1>
        </div>
    
        <div class="productbody">
        <p><?= $item["description"]  ?></p>
    </div>
        <div class="productImg">
            <img src="./img/<?=  $item["filename"]  ?>" alt="" srcset="">
        </div>
    
    </div>


    <!-- footer section -->

    <?php  require("./Composants/Footer.php")  ?>
        <script src="mdb.min.js"></script>
    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
</body>

</html>
<?php endforeach ?>