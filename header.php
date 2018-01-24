
<?php
include ("dbconnect.php");
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
                
                $_SESSION['username']=$username;

                 
                header("Location:userdash.php");
            }   
            else {
             echo "You are not a user! Please Sign up Here!";  
            header('Location: register.php');
           
            
        }
                }} 







?>





<head>


<title> AFARIZMI </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />


<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

   

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/user.css" rel="stylesheet">
    
<script>
    
 function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
    
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    
</script>

<style>
    
 .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 400px;
    min-height:200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	color:#000;
}





.show {display:block;}   
</style>


</head>


<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>	
				</ul>
			</div>
		
			


				<div class="ca-r">
					<div class="cart box_1">
						
						<h3> <div class="total">
					
                       	<div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn"><img src="images/cart.png" alt=""/>Shopping Cart</button>
                          <div id="myDropdown" class="dropdown-content"> 
                             <?php
                              include("dbconnect.php");
                              global $catid;
echo "<div class=orderdetails>";


$sid=session_id();
$query3="select * from tmporders where sessionid='$sid'";
$result3=mysqli_query($conn,$query3);
$total=0;

?> 

	<table id="cart" class="table table-hover table-condensed">
					<thead>
						<tr>
							<th style="width:50%">Price</th>
							<th style="width:10%">Remove</th>
							
							<th style="width:22%" class="text-center">One item</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						

<?php
while($row=mysqli_fetch_array($result3))
{
	
	
	echo "<td>";
    echo $row['price'];        
    echo " Den</u></b></td>";
	echo "<td>";
    echo "<a href=delitem.php?catid=$catid&orderid=";
    echo $row['orderid'];
    echo "> X </a>";
	echo "</td>";
	echo "<td>";
    echo "<a href=delallbut.php?catid=$catid&orderid=";
    echo $row['orderid'];
    echo "> I only want this</a><br />";
	echo "</td>";
    $total+=$row['price'];
	echo "</tr>";
}
echo "</tbody><tfoot>";
echo "<tr><td><h3 style='color:#000'>Total: $total den.</h3></td>";
echo "<td>"; ?>
 <p> <a href="javascript:void(0)" class="btn btn-primary" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Complete Order</a>
  </p>
  
  <div id="fade" class="black_overlay"></div>
 
   <?php "</td></tr>";
echo "</tfoot></table>";
echo "</div>";
        ?>
</tbody></table>
                             
                             
                              </div>
                            </div>

							
						
						
                            </div>
                            
                             </div></div></div></div></div>
				
					<div class="clearfix"> </div>
			<div id="light" class="white_content">
<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">x</a>


<p>
Your order has been completed. Thank you for your time! <br><br>
<a href="logout.php" class="btn btn-primary"> Log out </a> 
<a href="userdash.php" class="btn btn-primary"> Continue Shopping </a> 
</p>
                        </div> 
		
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="home.php">AFARIZMI</a></h1>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					 
				     
				      
                    
                   
                    			
				
				<li class="grid"><a class="color2" href="logout.php">Logout</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>



