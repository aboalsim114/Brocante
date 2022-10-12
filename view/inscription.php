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
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">formulaire d'inscription </h3>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1m" name="prenom" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m">Prénom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input name="nom" type="text" id="form3Example1n" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1n">Nom</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-outline mb-4">
                                    <input name="Adresse" type="text" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Adresse</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input name="postal" type="text" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Code Postal</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input name="email" type="email" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Votre Mail</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input name="password" type="password" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Mot de passe</label>
                                </div>


                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">Le genre: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input name="femme" class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                                        <label class="form-check-label" for="femaleGender">Femme</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input name="homme" class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                        <label class="form-check-label" for="maleGender">Homme</label>
                                    </div>



                                </div>










                                <div class="d-flex justify-content-end pt-3">
                                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                    <button name="submit" type="button" type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php  require("./Composants/Footer.php")  ?>

    <script src="https://kit.fontawesome.com/36b9253a34.js" crossorigin="anonymous"></script>
</body>

</html>