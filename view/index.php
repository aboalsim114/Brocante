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
            <h2 style="text-align: center;">trouvez la bonne affaire sur le site référent de petites annonces de particulier à particulier</h2>
            <input type="search" placeholder="rechercher un article">
            <input type="text" name="" id="" placeholder="entrez une ville">
            <button id="btn-trouver" type="submit" class="btn btn-primary">Trouver <i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        </form>
    </header>


    <section class="cards-container">
        <?php for ($i=0; $i < 5; $i++): ?> 
            
        <div class="card">
            <div class="card-img">
                <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVhbCUyMGVzdGF0ZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
            </div>
            <div class="card-titre">
                <h2>titre</h2>
            </div>
            <div class="card-footer"><a href="#">Voir Plus</a></div>

        </div>
       

        <?php endfor ?>


    </section>



    <!-- footer section -->

    <?php  require("./Composants/Footer.php")  ?>



    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
</body>

</html>