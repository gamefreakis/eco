<?php

include("dbconnect.php");
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    $query = "SELECT * FROM admin WHERE email= '$email' and password='$pass'" ;
            $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
            {
            while($row = mysqli_fetch_assoc($result))
            {
                $username=$row['username'];
                $myemail= $row['email'];
                $mypassword=$row ['password']; 
               
               
             
            }
                if ($email===$myemail && $pass===$mypassword)
    {
        if (isset($_POST['remember'])){
            $rem=$_POST['remember'];
            session_start();
            setcookie('email', $myemail, time()+60*60*7);
            $_SESSION['username']=$username;
            $_SESSION['email']=$email;
            header("Location:admindash.php");
        }
        else {
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['username']=$username;
            header("Location:admindash.php");
        }
        
        
    }
	
	
   
  
   
    
        
       
    }
 else{
            $email=$_POST['email'];
            $pass=$_POST['password'];
           
            $query1 = "SELECT * FROM users WHERE email= '$email' and password='$pass'" ;
            $result=mysqli_query($conn,$query1);
        if(mysqli_num_rows($result)==1)
            {
                setcookie('username', $username, time()+60*60*7);
                session_start();
                $_SESSION['username']=$username;

                 echo "Welcome ".$username;
            echo $_COOKIE['user'];
                header("Location:userdash.php");
            }   
            else {
            echo "You are not logged in! Please Sign up";
            echo "<a href='register.php'> Here</a>";
        }
                }} 

else {
    
   
}  








if(isset($_SESSION['email'])){



    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
<style>
    html{
        background-image: url("pictures/bg.jpg");
     
    }
    h1 {
 
  width: 800px;
 
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
    padding-left:550px;
    }
    
</style>
<link href="css/head.css" rel="stylesheet">
</head>
<body>
<div class="container">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php echo "<h1 style=color:white align=center;>"."WELCOME"."<br>". $_SESSION['username']."</h1>"; ?>

  <div class="interior">
 <div class="buttonHolder">
 
  <a href="insert.php" class="button tick"></a>
  <a href="deleterecord.php" class="button cross"></a>
   <a href="deleterecord.php" class="button flower"></a>
   <a href="logout.php" class="button logout"></a>
</div>
    
	 
  </div>


</div> 
</body>
</html>


<?php
}

else {
    echo "LOGIN PLEASE!";
}

?>>