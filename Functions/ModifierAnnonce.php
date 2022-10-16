<?php
session_start();



require("../Config/config.php");
$id = $_SESSION["user_id"];



if(isset($_POST["submit"])){
    $titre = htmlspecialchars($_POST["titre"]);
    $description = htmlspecialchars($_POST["description"]);
    $prix = htmlspecialchars($_POST["prix"]);
    $postal = htmlspecialchars($_POST["postal"]);
    

  

    $query = "UPDATE annonce SET titre='$titre', description='$description', prix='$prix',postal='$postal'  WHERE user_id='$id'";
    $result = $conn->query($query);
    header("location:../index2.php");
    
   

   


}