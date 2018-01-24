<?php
include_once("dbconnect.php");
include_once("homeheader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    * {
    box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

/* Style the list */
.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

/* Add shadows on hover */
.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

/* List items */
.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

/* Grey list item */
.price .grey {
    background-color: #eee;
    font-size: 20px;
}

/* The "Sign Up" button */
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

/* Change the width of the three columns to 100% 
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
    </style>
</head>
<body>
   <div class="grow">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="contact">
			
			<div class="container">
			<div class="contact-form">
				
				<div class="col-md-4 contact-grid">
					<form action="" method="post">
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="send">
							<input type="submit" value="Send">
						</div>
					</form>
				</div>
				<div class="col-md-3 contact-in">

						<div class="address-more">
						<h4>Address</h4>
							<p>SEEU,</p>
							<p>Textile Shop,</p>
							<p>Ilindenska 335, Tetovo 1200 </p>
						</div>
						<div class="address-more">
						<h4>Additional Information</h4>
							<p>Tel:044 356 000</p>
							<p>Fax:190-4509-494</p>
							<p>Email:<a href="mailto:seeu@seeu.edu.mk"> seeu@seeu.edu.mk</a></p>
						</div>
			
				</div>
				<div class="col-md">
				    		<div class="columns">
  <ul class="price">
    <li class="header">Premium User</li>
    <li class="grey">$ 9.99 / year</li>
    <li>25% Discount</li>
    <li>5+ free coupons</li>
    <li>Buy 2 get 1 opportunity</li>
    
    <li class="grey"><a href="register.php" class="button">Sign Up</a></li>
  </ul>
</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.5335321154266!2d20.960547315751487!3d41.98882397921362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1353fa781c988b49%3A0x72066ce3777a2e2c!2sSouth+East+European+University!5e0!3m2!1sen!2smk!4v1513810315905" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		</div>
		
<?php
include_once("footer.php");

?>
</body>
</html>

