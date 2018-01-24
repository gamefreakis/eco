<?php


include_once("dbconnect.php");

include_once("functions.php");

echo "<a href=admindash.php class='btn btn-primary'>";
    echo "<h5>Go Back</h5>";
        echo"</a>";
echo "<br>";








?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style>
    html, body{
        background-image: url("pictures/bg.jpg");
    }
    .card{
        background-color:white;
        border: 2px;
    }
    .album{
        margin-left:-50px;
        padding-left: 50px;
        border-bottom:8px;
    }
    
    
    </style>
 <link href="css/user.css" rel="stylesheet">
</head>
<body>
<div class="album text-muted">
      <div class="container">

        <div class="row">
       
       <?php newProducts(); ?>
           
          </div></div></div>
</body>
</html>





