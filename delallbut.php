<?php
session_start();
include("dbconnect.php");

$orderid=$_GET['orderid'];
$catid=$_GET['catid'];
$query="delete from tmporders where orderid-$orderid";
mysqli_query($conn,$query);
header("Location:userdash.php");


?>