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
  
<div class="container">
  
    	<div class="row">
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Product Preview</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								
								<th>Title</th>
								<th>Author</th>
								<th>Publisher</th>
								<th>Details</th>
								<th>Price</th>
								<th>Picture</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $name ?></td>
								<td><?php echo $author ?></td>
								<td><?php echo $publisher ?></td>
								<td><?php echo $details ?></td>
								<td><?php echo $price ?></td>
								<td><?php  echo "<img src=images/";
		echo $picture;
		echo " />"; ?></td>
							</tr>
							
						</tbody>
					</table>
                </div></div></div></div></div>
   
  
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
