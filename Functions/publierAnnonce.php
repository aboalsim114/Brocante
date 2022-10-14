<?php
session_start();



require("../Config/config.php");

$user_id = $_SESSION["user_id"];

if(isset($_POST["submit"])){
    
    $titre = htmlspecialchars($_POST["titre"]);
    $description = htmlspecialchars($_POST["description"]);
    $prix = htmlspecialchars($_POST["prix"]);
    $postal = htmlspecialchars($_POST["postal"]);
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../img/" . $filename;
    



    $sql = "INSERT INTO annonce (titre,description,filename,prix,user_id,postal) VALUES ('$titre', '$description','$filename','$prix','$user_id','$postal')";

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


