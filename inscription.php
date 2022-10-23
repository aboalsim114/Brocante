<!-- php section  -->
<?php

require("./Config/config.php");

global $msgerror;
global $msgsuccess;
 $success = FALSE;
if(isset($_POST["submit"])){

    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $Adresse = htmlspecialchars($_POST["Adresse"]);
    $postal = htmlspecialchars($_POST["postal"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars(md5($_POST["password"]));
    $genre = htmlspecialchars($_POST["genre"]);
    $user_ip=$_SERVER['REMOTE_ADDR'];



    
/* verifi si les champs du form sont vide ou pas  */

    if(empty($nom) or empty($prenom) or empty($Adresse) or empty($postal) or empty($email) or empty($password) or empty($genre) or strlen($password) < 10 ){
        $msgerror = "veuillez saisir tout vos champs";
        exit(0);
    }


/* verifier si les information entrer existent deja dans la base de donnée */        

$sql_e = "SELECT * FROM user WHERE email='$email'";
$res_e = mysqli_query($conn, $sql_e);

if (mysqli_num_rows($res_e) > 0) {
    echo("<script type='text/javascript'>alert('ce Mail est deja pris')</script>");

}

if (strlen($_POST["password"]) <= '10') {
    echo("<script type='text/javascript'>alert('Votre mot de passe doit faire plus de 10 caractères ')</script>");
}


else{

    /* req */        
    $sql = "INSERT INTO user (prenom,nom,adresse,postal,email,password,genre,user_ip) VALUES ('$prenom', '$nom','$Adresse','$postal','$email','$password','$genre','$user_ip') ";
    
/* si tout les champs sont rempli alors  */
if(mysqli_query($conn , $sql)){
    $msgsuccess = "ton compte a bien été cree";
    $success = TRUE;
    
    
}



else {
    echo "Error: " . $sql . "
    " . mysqli_error($conn);
}

}
        
    
   
    }




  









?>


<!-- html  -->
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




    <?php if($success == TRUE): ?>
    
        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">félicitation <?=  $prenom  ?></h4>
  <p>votre compte a été créé avec succès</p>
  <hr>
<a href="connexion.php">Connectez-vous</a>
</div>


    <?php endif ?>








    <section class="h-100 bg-white">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="https://cdnm.westwing.com/image/upload/v1/contenthub/app/uploads/fr/2020/12/08123333/designerski-salon-w-niebieskim-akcentem-786x1024-1.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                            />
                        </div>
                        <div class="col-xl-6">
                            <form  method="post">
                            <div class="card-body p-md-5 text-black">
                                
                                <h3 class="mb-5 text-uppercase">formulaire d'inscription </h3>
                            

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input required type="text" id="form3Example1m" name="prenom" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m">Prénom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input required name="nom" type="text" id="form3Example1n" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1n">Nom</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-outline mb-4" autocomplete="off">
                                    <input required name="Adresse" type="text" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Adresse</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input required name="postal" type="text" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Code Postal</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input required name="email" type="email" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Votre Mail</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input required name="password" type="password" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Mot de passe</label>
                                </div>


                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">Le genre: </h6>

                                    <select required name="genre" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                    </select>



                                </div>










                                <div class="d-flex justify-content-end pt-3">
                                    <button type="button" class="btn btn-light btn-lg">Supprimer tout</button>
                                    <button name="submit"  type="submit" class="btn btn-warning btn-lg ms-2">Cree mon compte</button>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php  require("./Composants/Footer.php")  ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>

</body>

</html>