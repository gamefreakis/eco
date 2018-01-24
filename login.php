
<!DOCTYPE html>
<html>
<head>
    </head>
<body>
<?php
    
    
    
    if (isset($_COOKIE['email']) and isset ($_COOKIE['pass'])){
    $email=$_COOKIE['email'];
    $pass=$_COOKIE['pass'];
    echo $email;
    echo "<script>
    alert('$email');
    document.getElementById()('email').value='$email';
     document.getElementById()('password').value='$pass';
    </script>
    ";}
    
    include_once("homeheader.php");
    ?>
	<div class="grow">
		<div class="container">
			<h2>Login</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="container">


		<div class="account">
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form action="header.php" method="post">
				
			<div> 	
				<span>Email</span>
				<input type="text" name = "email" id="email"> 
			</div>
			<div> 
				<span >Password</span>
				<input type="password" name = "password" id="password">
			</div>	
			<div> 	
				
				<input type="checkbox" name="remember" value="1">Remember Me 
			</div>			
				<input type="submit" value="login" name="login"> 
			</form>
		</div>
		<div class="col-md-4 left-account ">
            <a href="register.php"><img class="img-responsive " src="images/register.png" alt="">
			<div class="five">
			<h2>25% </h2><span>discount</span>
            </div></a>
            
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

    </div>

<?php
    include("footer.php");
    ?>
</body>
</html>