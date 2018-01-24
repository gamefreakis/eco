<?php


include_once("dbconnect.php");
$query="select * from products";
$result=mysqli_query($conn,$query);
echo"<table>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>";
	echo $row['categoryid'];
	echo "</td>";
	echo "<td>";
	echo $row['name'];
	echo "</td>";
	echo "<td>";
	echo "<a href=actiondelete.php?categoryid=".$row['categoryid'].">Delete</a>";
	echo"</td>";
	echo"<td>";
	echo "<a href=edit.php?categoryid=".$row['categoryid'].">Edit</a>";
	echo"</td>";
	
}
echo "</table>";

echo "<a href=logout.php> Log Out </a>";
?>
