<?php
$hostname="localhost"; 
$username="root";  
$password="";    
$database="inventory";  
$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con)
{
        die('Connection Failed'.mysqli_connect_error());
}
//mysqli_select_db($database,$con);	
?>



