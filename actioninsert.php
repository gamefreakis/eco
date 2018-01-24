<?php
include_once("dbconnect.php");

$catid=$_POST['catID'];
$name=$_POST['name'];
$manufacturer=$_POST['manufacturer'];
$price=$_POST['price'];
$picture=$_POST['picture'];

if ($_POST['insert']){
$query= "insert into products values (NULL, '$catid', '$name', '$manufacturer', '$price', '$picture')";
$run_query=mysqli_query($conn,$query);
if($run_query) 
	{
   		echo "<b>You inserted a new product!</b><br>";
        echo "<a href='admindash.php' class ='btn-primary'> Go back </a>";
   		include("insert.php");
	}}
?>
