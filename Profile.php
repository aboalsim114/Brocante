<?php
session_start();

require("./Config/config.php");








$id = $_SESSION["user_id"];

$sql = "SELECT * FROM user WHERE user_id='$id' ";
$stmt = $conn->prepare($sql); 

$stmt->execute();
$result = $stmt->get_result();





/* update Profile */
if(isset($_POST["update"])){
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $postale = htmlspecialchars($_POST["postale"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

  

    $query = "UPDATE user SET nom='$nom', prenom='$prenom', adresse='$adresse',postal='$postale',password='$password'  WHERE id='$id'";
    $result = $conn->query($query);
    header("location:Profile.php");
   

   


}





?>
<?php foreach($result as $item): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $item["prenom"] . " " . $item["nom"]  ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,800%7COpen+Sans:400,400i,700" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="mdb.min.css">      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php  require("./Composants/Nav2.php") ?>

    <!--  -->

    <form  method="post">
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?= $item["prenom"] . " " . $item["nom"]  ?></span><span class="text-black-50"><?= $item["email"] ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            
            
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Paramètres de profil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input name="nom" type="text" class="form-control" placeholder="<?= $item["nom"]  ?>" value="<?= $item["nom"]  ?>"></div>
                    <div class="col-md-6"><label class="labels">Prenom</label><input name="prenom" type="text" class="form-control" value="<?= $item["prenom"]  ?>" placeholder="<?= $item["prenom"]  ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">adresse </label><input name="adresse" type="text" class="form-control" placeholder="<?= $item["adresse"]  ?>" value="<?= $item["adresse"]  ?>"></div>
                    <div class="col-md-12"><label class="labels">Code Postal</label><input type="text" name="postale" class="form-control" placeholder="<?= $item["postal"] ?>" value="<?= $item["postal"] ?>"></div>
                    <div class="col-md-12"><label class="labels">Email </label><input type="text" name="email" class="form-control" placeholder="<?= $item["email"]  ?>" value="<?= $item["email"]  ?>"></div>
                    <div class="col-md-12"><label class="labels">Mot de passe</label><input type="password" name="password" class="form-control" placeholder="*********" value="<?= $item["password"] ?>"></div>
                </div>
               
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="update" type="submit">Enregistrer le profil  <i class="fa-solid fa-pen-to-square"></i></button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
</form>

<script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
<script src="mdb.min.js"></script>

</body>
</html>
<?php endforeach ?>