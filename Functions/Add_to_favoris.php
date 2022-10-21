<?php 
session_start();
require("../Config/config.php");

if(!isset($_SESSION["user_id"])){
    header("Location: index.php");
    
    exit(); 
  }



$date = date("Y:m:d");
$id = $_SESSION["user_id"];
$annonce_id = $_GET["id"];





$sql = "INSERT INTO favoris(user_id,annonce_id,date) VALUES('$id', '$annonce_id','$date')";



if(mysqli_query($conn , $sql)){
    $msgsuccess = "a été ajouter";
    header("location:../index2.php");
    
}

else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }


