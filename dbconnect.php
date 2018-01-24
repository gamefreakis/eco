<?php

$host = "localhost" ; 
$username = "root";
$password = "";

$dbname= "bookshop";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn)
{
	die("Error: Can not connect with myswl database server" );
	
}
?>