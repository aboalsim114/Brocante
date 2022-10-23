<?php
session_start();

require("../Config/config.php");

$id = $_GET["id"];



$sql = "DELETE  FROM user WHERE user_id=".$id;
$stmt = $conn->prepare($sql); 
 $conn->query($sql) ;
    header("location:Admin.php");


