<?php
session_start();

require("../Config/config.php");

$user_id = $_SESSION["user_id"];
$annonce_id = $_GET["id"];


$sql = "DELETE  FROM favoris WHERE annonce_id=".$annonce_id;
$stmt = $conn->prepare($sql); 

 $conn->query($sql) ;

  header("location:../MesFavoris.php");


