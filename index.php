<?php


require("./Config/config.php");


  $sql = "SELECT * FROM annonce ";
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>


   <?php  require("./Composants/Nav.php")  ?>

    <header>

        <form class="searchForm" method="post">
            <input type="search" placeholder="rechercher un article">
            <input type="text" name="" id="" placeholder="entrez une ville">
            <button id="btn-trouver" type="submit" class="btn btn-primary">Trouver <i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        </form>
    </header>


    <section class="cards-container">
        
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card">
                <div class="card-img">
                    <img src="./img/<?= $row["filename"]  ?>" alt="" srcset="">
                </div>
                <div class="card-titre">
                    <h2><?=  $row["titre"] ?></h2>
                </div>
                <div class="card-footer"><a href="#">Voir Plus</a></div>
    
            </div>
           
            <?php endwhile ?>
            
    
    
        </section>
    



    <!-- footer section -->

    <?php  require("./Composants/Footer.php")  ?>



    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
</body>

</html>