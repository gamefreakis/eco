dd<?php
session_start();
include("dbconnect.php");
if(isset($_GET['id']))
{
    $prodid=$_GET['id'];
    $query3="select * from products where id='$prodid'";
    $result=mysqli_query($conn,$query3);
    $row=mysqli_fetch_assoc($result);
    $price=$row['price'];
    $sid=session_id();
    $date=date("Y-m-d");
    $time=date("h:i:s");
    $query="insert into tmporders values
    (Null, '$sid', '$prodid', '$price', '$date', '$time')";
    
    mysqli_query($conn,$query);
    $catid=$_GET['catid'];
    header("Location:userdash.php?catid=$catid");
}



?>