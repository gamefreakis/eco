<?php

include_once("dbconnect.php");
$prodid=$_GET["id"];


$query="delete from products where id=".$prodid;

mysqli_query($conn,$query);


echo"<script> alert('The item with the ID: $prodid has been deleted.');</script>";


include("deleterecord.php");



?>