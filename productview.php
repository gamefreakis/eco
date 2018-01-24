<?php


    include_once("header.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
   
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
          
 
          
        </p>
      </div>
    </section>
    

   <div>
   
   
   <?php
include("dbconnect.php");

if(isset($_POST['view']))
{
    $id=$_POST['id'];
    
    $query=" SELECT * FROM products WHERE id=$id";
    $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_assoc($result))
   {
       $id=$row['id'];
       $categoryid=$row['categoryid'];
       $ISSN=$row['issn/barcode'];
       $name=$row['name'];
       $author=$row['author'];
       $publisher=$row['publisher'];
       $details=$row['details'];
       $price=$row['price'];
       $dprice=$row['dprice'];
       $picture=$row['picture'];
       
   }
}





?>
  
<table border=1>
   
    <tr>
        <td>
            Category: 
        </td>
        <td>
            <?php echo $categoryid;?>
        </td>
    </tr>
    <tr>
        <td>
           Title: 
        </td>
        <td>
           <?php echo $name;?>
        </td>
    </tr>
    <tr>
        <td>
           Author: 
        </td>
        <td>
            <?php echo $author;?>
        </td>
    </tr>
    <tr>
        <td>
           Publisher: 
        </td>
        <td>
            <?php echo $publisher;?>
        </td>
    </tr>
    <tr>
        <td>
           Details: 
        </td>
        <td>
            <?php echo $details;?>
        </td>
    </tr>
    <tr>
        <td>
           Price: 
        </td>
        <td>
            <?php echo $price;?>
        </td>
    </tr>
    <tr>
        <td>
           Picture: 
        </td>
        <td>
            <?php echo $picture;?>
        </td>
    </tr>
   
	 </table>  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
      </div>
   
   
   
   
   
   
   
   
   

         
     
    

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