<?php
Include('connect.php');
$query= "select * from inventory";
$result=mysqli_query($con,$query);
   ?>
<html>
<head>
<body>

<table align="center" border="2px" bgcolor="white">
<a href="index.html">Index values</a>
<tr>
<th colspan="6"<h2>inventory</h2></th>
</tr>
<t>
<th>productid</th>
<th>productname</th>
<th>quantity</th>
<th>Price</th>
</t>
<?php
	
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr> 
<t> 
<th><?php echo $rows ['productid'];?></th>
<th><?php echo $rows ['productname'];?></th>
<th><?php echo $rows ['quantity'];?></th>
<th><?php echo $rows ['Price'];?></th>
</t>
<?php
}
?>



</table>
</body>

</head>
</html>