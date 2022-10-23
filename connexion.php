<?php
session_start();
require("./Config/config.php");


global $errinfo;
if(isset($_POST["submit"])){
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    /* verifi si les champs du form sont vide ou pas  */

    if( empty($email) or empty($password) ){
        $msgerror = "veuillez saisir tout vos champs";
        exit(0);
    }


    $sql = "SELECT * FROM user WHERE  email='$email' and password='".hash('md5', $password)."'";

    $result = mysqli_query($conn,$sql);
     
    if(mysqli_num_rows($result) == 1){
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user_id'] = $row["user_id"];
            $_SESSION['nom'] = $row["nom"];
            $_SESSION['prenom'] = $row["prenom"];
            $_SESSION["role"] = $row["role"];
        }
        if($_SESSION["role"] == "admin"){
            header("location:./Admin/Admin.php");
            
        }
        else{
            header("Location:index2.php");
        }
        
        
    }else{
        echo("<script type='text/javascript'>alert('email ou mot de passe invalide ')</script>");
    }


}








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


    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                        <form method="post" style="width: auto;">
                            
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connexion</h3>
                          
                            <div class="form-outline mb-4">
                                <input required name="email" type="email" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Adresse e-mail</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input required name="password" type="password" id="form2Example28" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Mot de passe</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button type="submit" name="submit" class="btn btn-info btn-lg btn-block" >Connexion</button>
                            </div>

                            <p>Vous n'avez pas de compte ? <a href="inscription.html" class="link-info">Cree Mon Compte</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://img.freepik.com/photos-gratuite/cadre-photo-par-fauteuil-velours_53876-132788.jpg?w=2000" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
    <?php  require("./Composants/Footer.php")  ?>
    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>

</body>

</html>