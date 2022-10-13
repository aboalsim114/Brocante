<?php


require("../Config/config.php");

if(isset($_POST["submit"])){

    $titre = htmlspecialchars($_POST["titre"]);
    $description = htmlspecialchars($_POST["description"]);
    $prix = htmlspecialchars($_POST["prix"]);
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../img/" . $filename;




    $sql = "INSERT INTO annonce (titre,description,filename,prix) VALUES ('$titre', '$description','$filename','$prix')";

    if(mysqli_query($conn , $sql)){
        $msgsuccess = "ton jeu a été ajouter";
        
    }

    else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }



     move_uploaded_file($tempname, $folder);
    header("location:../index2.php");
   


}


