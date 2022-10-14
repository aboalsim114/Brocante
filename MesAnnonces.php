<?php

session_start();

require("./Config/config.php");

if(!isset($_SESSION["user_id"])){
    header("Location: index.php");
    
    exit(); 
  }

$id = $_SESSION["user_id"];





$sql = "SELECT * FROM annonce WHERE user_id='$id'";
$stmt = $conn->prepare($sql); 

$stmt->execute();
$result = $stmt->get_result();








?>

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

  <?php  require("./Composants/Nav2.php") ?>



    <section class="cards-container">
        
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="card">
            <div class="card-img">
                <img src="./img/<?= $row["filename"]  ?>" alt="" srcset="">
            </div>
            <div class="card-titre">
                <h2><?=  $row["titre"] ?></h2>
            </div>
            
            
                <div class="card-footer">
                    <a href="annonceDetail.php?id=<?= $row["id"] ?>">Voir Plus</a>
                    <a  onclick=" return confirm('est vous sur de vouloir supprimer ?')" style="color : red"  href="annonceDetail.php?id=<?= $row["id"] ?>">Supprimer</a>
                    <a style="color : blue" href="annonceDetail.php?id=<?= $row["id"] ?>">Modifier</a>
                </div>
                
            

        </div>
       
        <?php endwhile ?>
        


    </section>



    <!-- footer section -->

    <?php  require("./Composants/Footer.php")  ?>
        <script src="mdb.min.js"></script>
    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
</body>

</html>