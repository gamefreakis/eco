<?php


    include_once("header.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
   <style> 
      .style_prevu_kit
{
    display:inline-block;
    border:0;
    
    position: relative;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1); 
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1); 
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);   

}
.style_prevu_kit:hover
{
    box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.5);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.5);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.5);
    transition: all 200ms ease-in;
    transform: scale(1.5);
}
      
      
      </style>
  </head>

  <body>

    
   

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">WELCOME </h1>
        <p class="lead text-muted">Start shopping and gain a wonderful ecommerce experience.</p>
        <p>
          
          
        </p>
        <p>
            <?php


include("dbconnect.php");
?>
<ul class="nav justify-content-center">

<?php
$query="select * from categories";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_row($result))
{
    echo "<li class=nav-item>";
    echo "<a href=userdash.php?catid=";
    echo $row[0];
    echo ">".$row[1]."</a></li>";
}

    

       
       ?>
          
 
          </ul>
        
      </div>
    </section>
    

   
   
   
   
   
   
   
   
   
    <div class="album text-muted">
      <div class="container">

        <div class="row">
       
         <?php      

    

if(isset($_GET['catid']))
{
    global $catid;
    $catid=$_GET['catid'];
    $query2="select * from products where categoryid='$catid'";
    $result2=mysqli_query($conn,$query2);
   
    while($row=mysqli_fetch_assoc($result2))
    {
       
         
        echo"<div class='card style_prevu_kit'> ";  
          $pic="<img src=pictures/".$row['picture']." class='thumb' />";
               
        echo $pic;                        
               
        echo "<p class='card-text'>";
            
        echo "<b>".$row['name']."<br>";
        
        echo "<b>Price:"."<br>";
        echo $row['price']."<br>";
            echo " <a href=additem.php";
        echo "?catid=$catid&id=".$row['id'];
        echo " class='btn btn-primary'>Add to cart</a><br>";
           echo "</p>";
        
           echo "</div>"; 
            
         } }    
       
       

else
{
    $query1="select * from products";
    $result=mysqli_query($conn,$query1);
    while($row=mysqli_fetch_assoc($result))
    {
       
         
            echo"<div class='card style_prevu_kit'> ";  
          $pic="<img src=pictures/".$row['picture']." class='thumb' />";
               
        echo $pic;                        
               
        echo "<p class='card-text'>";
            
        echo "<b>".$row['name']."<br>";
        echo "<b>Author: ";
        echo "<b>".$row['author']."<br>";
        
        echo "<b>Price: ";
        echo $row['price']."<br>"; 
        echo "<p>";
        
        ?>

		
    <form action="productview.php" method="post">
        
        
         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <?php
     echo "<input class='btn btn-primary' type='submit' name='view' value='View Product'>";
        echo"</form>";
        echo "</div>";
    
    
}
		
       	
		
}   
    
	
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	
    
 ?>





<?php



?>
            </div></div>

         
     
    

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p> &copy;SEEU, SKOPJE</p>
        <p>Want to know more? <a href="http://www.seeu.edu.mk">Visit the homepage</a>.</p>
      </div>
    </footer>
      </div>
    
  </body>
</html>
<?php

include_once("footer.php");

?>