<!DOCTYPE html>
<html>
<head>


</head>
<body>
<?php
    
    include ("homeheader.php");
    
    ?>
	<div class="grow">
		<div class="container">
			<h2>Register</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class=" container">
<div class=" register">
	
		  	  <form action="actregister.php" method="post">
				 <div class="col-md-6 register-top-grid">
					<h3>Personal infomation</h3>
					  <div class="form-group">
						<label for="firstname">First Name:</label>
						<input type="text"name="name"> 
					 </div>
					  <div class="form-group">
						<label for="lastname">Last Name:</label>
						<input type="text" name="lastname"> 
					 </div>
					
					   
					 
                      <div class="form-group">
								<label for="mobile">Mobile:</label>
								<input type="tel" id="mobile" name="mobile" class="form-control">
                     </div>
                      <div>
								<label for="address">Address:</label>
								<input type="text" id="address" name="address">
                     </div>
                      <div class="form-group">
								<label for="city">City:</label>
								<input type="text" id="address" name="city">
                     </div>
                      <div class="form-group">
                         <label for="address">Country:</label><br>
								<select  name="country" class="form-control">
									  <option value="macedonia">Macedonia</option>
									  <option value="kosovo" selected>Kosovo</option>
									  <option value="albania">Albania</option>
								</select>
                         
                     </div>
                     
                     </div>
				     <div class="col-md-6 register-bottom-grid">
				     <div class="col-md-6 register-top-grid">
						    <h3>Login information</h3>
						      <div class="form-group">
								<label for="email">Email:</label>
								<input type="text" id="email" name="email">
                             </div>
							 <div class="form-group">
								<span>Username</span>
								<input type="text" name="username">
							 </div>
							 <div>
								<span>Password</span>
								<input type="password" name="password">
							 </div>
							 <input type="submit" value="Register">
							
					 </div></div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<?php
    
    include ("footer.php");
    ?>

</body>
</html>
			