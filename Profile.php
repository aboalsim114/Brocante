<?php

require("./Config/config.php");

session_start();

$email = $_SESSION["email"];

$sql = "SELECT * FROM user WHERE email='$email' ";
$stmt = $conn->prepare($sql); 

$stmt->execute();
$result = $stmt->get_result();



?>
<?php foreach($result as $item): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,800%7COpen+Sans:400,400i,700" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php  require("./Composants/Nav2.php") ?>

    <!--  -->

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?= $item["prenom"] . " " . $item["nom"]  ?></span><span class="text-black-50"><?= $_SESSION["email"]  ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Paramètres de profil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" placeholder="<?= $item["nom"]  ?>" value=""></div>
                    <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" value="" placeholder="<?= $item["prenom"]  ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">adresse </label><input type="text" class="form-control" placeholder="<?= $item["adresse"]  ?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Code Postal</label><input type="text" class="form-control" placeholder="<?= $item["postal"] ?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Email </label><input type="text" class="form-control" placeholder="<?= $item["email"]  ?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Mot de passe</label><input type="password" class="form-control" placeholder="*********" value=""></div>
                </div>
               
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Enregistrer le profil  <i class="fa-solid fa-pen-to-square"></i></button></div>
            </div>
        </div>
      
    </div>
</div>
</div>
</div>

<script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>

</body>
</html>
<?php endforeach ?>