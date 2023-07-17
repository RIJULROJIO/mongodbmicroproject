<?php
require '../vendor/autoload.php';

$con = new MongoDB\Client("mongodb://localhost:27017");

//echo $con;
$db = $con->Microproject;
//echo "database  selected" ;

//$collection = $db->createCollection("products");
//echo "collection created successfully" ;


$collection=$db->products;
//echo $collection;
