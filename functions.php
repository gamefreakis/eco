<?php

include_once ("dbconnect.php");


function  gen_nav()
{
	include_once ("dbconnect.php");
    global $conn;
	echo "<head>";
	echo '<link rel = "stylesheet" type="text/css"
	href = "css/navigation.css" />';
	echo "</head>";
	
    
	
	$query= "Select * from  categories";
	$result=mysqli_query($conn,$query);
	echo "<div id=navcontainer>";
	echo "<ul id=navlist>";
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<li>";
        
		echo "<a href = products.php?categoryid=".$row['categoryid'].">";
		echo $row['name'];
		echo"</a>";
		echo "</li>";
	
	}
	echo "</ul>";
	echo "</div>";
}



function newProducts()
{
	
    
	include("dbconnect.php");
	$query = "Select * from products ";
	$result =mysqli_query ($conn, $query);
    
   

  
 
    
   
while ($row = mysqli_fetch_array($result))
	{
    
    
     echo "<div class=card>";
     echo "<img src=pictures/";
		echo $row['picture'];
		echo " />";
        
		$name= $row['name'];
   
        $manu=$row['manufacturer']; 
   
        $price= $row['price']; 
    
    echo "<br>".$name;
    echo "<br>".$manu;
    echo "<br>".$price."<br>";
    
    echo "<a href=actiondelete.php?id=".$row['id']." float=left; >Delete</a>";
    
    ?>
    <form action="edit.php" method="post">
        
        
         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    
    
    <?php
     echo "<input type='submit' name='edit' value='Edit'>";
        echo"</form>";
        echo "</div>";
    
    
}
		
       	
		
}   
    
	




function ProductsbyCat($cat)
{
    include("header.php");
	include("dbconnect.php");
    global $conn;
    global $query;
	$query = "Select * from products where categoryid=".$cat;
	
	$result=mysqli_query($conn, $query);
	echo "<table border =0>";
    
   
    
    echo "<tr>";
while ($row=mysqli_fetch_array($result))
	{
		
		echo "<td>";
        echo "<img src=pictures/";
		echo $row['picture'];
		echo " />";
        
		echo "<br>".'name',"<br>";
		echo $row['name']; echo "<p/>";
        echo $row['manufacturer']; echo "<p/>";
        echo $row['price'];
	}
    echo "</tr>";
	
    echo "</table>";
}


function showadmin(){
    
    global $conn;
 $query="SELECT * FROM admin";
 $result=mysqli_query($conn,$query);
    if(!$result){
        
        die('Query failed');
    }
 while($row=mysqli_fetch_assoc($result))  {
  $username = $row['username'];
    echo "<option value='$username'>$username</option>";
 } 
                           
}                                



function showAllData() {
    global $conn;
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        
    echo "<option value='$id'>$id</option>";
    
    }
    
}

function updateProduct() {
    if(isset($_POST['submit'])) {
    
global $conn;
$id = $_POST['id'];
$categoryid = $_POST['categoryid'];
$name = $_POST['name'];
$manufacturer = $_POST['manufacturer'];
$price = $_POST['price'];
$picture = $_POST['picture'];


    
$query = "UPDATE products SET ";
$query .= "categoryid = '$categoryid', ";
$query .= "name = '$name', ";
$query .= "manufacturer = '$manufacturer', ";
$query .= "price = '$price', ";
$query .= "picture = '$picture' ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($conn, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($conn));    
    }else {
    
    echo "Record Updated"; 
    
    }
        
    }
else {
    header("Location:actionedit.php");
}
    

}

function updateInfo() {
    if(isset($_POST['submit'])) {
    
global $conn;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "UPDATE admin SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Information Updated"; 
    
    }
        
    }
    

}






?>









