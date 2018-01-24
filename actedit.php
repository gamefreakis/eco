
<?php
include_once("dbconnect.php");


if(isset($_POST['edit'])){
    
$id=$_POST['id'];
$categoryid=$_POST['categoryid'];
$name=$_POST['name'];
$manufacturer=$_POST['manufacturer'];
$price=$_POST['price'];
$picture=$_POST['picture'];

$query="update products SET id='$id',categoryid='$categoryid',name='$name',manufacturer='$manufacturer',price='$price',picture='$picture' where id=$id";

mysqli_query($conn,$query);

if(!$query)  
{
    die("Query failed");
}
    else {
        
        echo"The product was edited successfuly";
    }
}


?>


