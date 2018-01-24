<?php
    include ("dbconnect.php");
  $nemail=$_POST['email'];
  $query= "INSERT into newsletter values ('$nemail')";
 mysqli_query($conn,$query);


       

$sql="SELECT userid FROM newsletter WHERE email='$nemail' LIMIT 1";
   	$check_query = mysqli_query($conn, $sql);
   	
   	if (mysqli_num_rows($check_query)>0){

   		echo"Try Another email adress. This is already taken!</b>
   		";
   	exit();
	}

	else {
   	$password=md5($password);
   	$sql="INSERT INTO `newsletter` (`email`) VALUES ('$nemail')";
   	$run_query=mysqli_query($conn,$sql);
   	if($run_query) {
   		echo "
   		<b>You are Registered successfully...!</b>
   		";
   		}}


?>