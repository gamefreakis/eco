
<?php
include("dbconnect.php");

if(isset($_POST['edit']))
{
    $id=$_POST['id'];
    
    $query=" SELECT * FROM products WHERE id=$id";
    $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_assoc($result))
   {
       $id=$row['id'];
       $name=$row['name'];
       $manufacturer=$row['manufacturer'];
       $price=$row['price'];
       $picture=$row['picture'];
       $categoryid=$row['categoryid'];
   }
}





?>
<html>
<head>
<style>
    html{
        background-image: url("pictures/bg.jpg");
     
    }
    h1 {
 
  width: 600px;
 
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
    padding-left:550px;
    }
    
		form {
	margin: 20px auto;
	margin-top: 200px;
	width: 320px;
	
	
	}
	
	input{
	 padding: 10px; 
	 font-size: inherit;
	}
	
	input[type="text"] {
		display: block;
		margin-bottom: 25px;
		width: 100%;
		border: 2px;
	}
	
	input[ type="submit"] {
		width: 320px;
		height: 45px;
		border: none;
		background: steelblue;
		color: white;
		
	}
</style>


<link href="css/head.css" rel="stylesheet">

</head>
<body>
  
	<form action="actedit.php" method="post">
   
    <p>
        
        <input type="text" value="<?php echo $id;?>" name="id" >
    </p>
    <p>
        <input type="text" value="<?php echo $categoryid;?>" name="categoryid" >
    </p>
    <p>
        
        <input type="text" value="<?php echo $name;?>" name="name" >
    </p>
    <p>
        <input type="text" value="<?php echo $manufacturer;?>" name="manufacturer" >
    </p>
    <p>
        <input type="text" value="<?php echo $price;?>" name="price" >
    </p>
    <p>
        <input type="text" value="<?php echo $picture;?>" name="picture" >
    </p>
    <input type="submit" value="Edit" class ="btn-submit" name="edit">
	 </form>
	 
</body>
	 
</html>