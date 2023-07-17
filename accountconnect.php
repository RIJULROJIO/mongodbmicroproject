<?php
require '../vendor/autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

//echo $con;
$db = $con->Microproject;
//echo "database  selected" ;

//$collection = $db->createCollection("profile");
//echo "collection profile created successfully" ;


$collection=$db->profile;
//echo $collection;
