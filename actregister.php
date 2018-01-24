<?php

include_once("dbconnect.php");

$fname=$_POST['name'];
$lname=$_POST['lastname'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];



$query="SELECT username FROM users WHERE email='$email' LIMIT 1";
$check_query = mysqli_query($conn,$query);

if (mysqli_num_rows($check_query)>0){

   		echo"<b>Try Another email adress. This is already taken!</b>";
   	exit();
}
else {
    $password=$password;
   	$query= "insert into users values (NULL, '$username', '$fname', '$lname', '$mobile', '$address', '$city', '$country', '$email', '$password', '2', '')";
   	$run_query=mysqli_query($conn,$query);
   	if($run_query) 
	{
   		echo "<b>You are Registered successfully...!</b>";
   		
	}
		
	}



?>