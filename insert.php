


<html>
<head>
<style>
    html{
        background-image: url("pictures/bg.jpg");
     
    }
    h1 {
 
  width: 800px;
 
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

	<form action="actioninsert.php" method="post">
   
    <p>
        
        <input type="text" name="catID" placeholder ="Category ID">
    </p>
    <p>
        <input type="text" name="name" placeholder="Product name">
    </p>
    <p>
        
        <input type="text" name="manufacturer" placeholder="Manufacturer">
    </p>
    <p>
        <input type="text" name="price" placeholder="Price">
    </p>
    <p>
        <input type="text" name="picture" placeholder="Picture">
    </p>
    <input type="submit" value="Insert New Product" class ="btn-submit" name="insert">
        
	 </form>
	 
</body>
	 
</html>