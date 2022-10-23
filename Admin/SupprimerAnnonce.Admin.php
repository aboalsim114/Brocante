<?php
session_start();

require("../Config/config.php");


$annonce_id = $_GET["id"];


$sql = "DELETE  FROM annonce WHERE id=".$annonce_id;
$stmt = $conn->prepare($sql); 

 $conn->query($sql) ;

  header("location:Admin.php");


