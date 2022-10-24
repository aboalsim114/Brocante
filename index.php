<?php

session_start();

require("./Config/config.php");




$sql = "SELECT * FROM annonce   LIMIT 4 ";
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
    <link rel="shortcut icon" href="./img/logoico.ico" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,800%7COpen+Sans:400,400i,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
    <link rel="stylesheet" href="./style.css">
    
 >
</head>

<body>


   <?php  require("./Composants/Nav.php")  ?>

    <header>

        <form class="searchForm" method="post">
            <input onkeyup="myFunction()" id="search" type="search" placeholder="rechercher un article">
            <button  id="btn-trouver" type="submit" class="btn btn-primary">Trouver <i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        </form>
      
    </header>


    <div class="filter">
        <form   method="post">
            <select name="date" id="date" placeholder="test">
            <option value="" selected disabled hidden>Trier par : </option>
                <option selected="selected" value="DESC">Sorties : ancienne</option>
                <option value="ASC">Sorties : récentes</option>
            </select>

            <select name="categorie" id="Categorie" placeholder="test">
            <option value="" selected disabled hidden>Categorie  : </option>
                <option value="sport">Sport</option>
                <option   value="action">Action</option>
                <option value="rbg">RBG</option>
                <option value="fps">FPS</option>
            </select>

            <button style="width : 10%" class="btn btn-warning" name="submit" type="submit"> Filtrer <i class="fa-solid fa-magnifying-glass-arrow-right"></i></button>
           
           
        </form>
    </div>
    <section class="cards-container">
    
  
    <?php foreach($result as $row): ?>
        <div class="card">
            <div class="card-img">
                <img src="./img/<?= $row["filename"]  ?>" alt="" srcset="">
            </div>
            <div class="card-titre">
                <h2><?=  $row["titre"] ?></h2>
            </div>
            <div class="card-footer"><a href="annonceDetail.php?id=<?= $row["id"] ?>">Voir Plus</a></div>

        </div>
       
        <?php endforeach ?>
       
        
        

    </section>


    
    



    <!-- footer section -->

    <?php  require("./Composants/Footer.php")  ?>

        <script>
        function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("cards-container");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
        </script>

    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
</body>

</html>