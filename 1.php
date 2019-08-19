 <?php     
Include('connect.php');

if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['productid']=='' ||$_REQUEST['productname']=='' || $_REQUEST['quantity']=='' || $_REQUEST['Price']=='')
{
echo "please fill the empty field.";
}
else
{
$sql= "insert into inventory(productid,productname,quantity,Price) values ('".$_REQUEST['productid']."','".$_REQUEST['productname']."', '".$_REQUEST['quantity']."','".$_REQUEST['Price']."','"."')";
$res=mysqli_query($con,$sql);
}
if($res)
{
echo "Record successfully inserted";
}
else
{
echo "There is some problem in inserting record";
}

}


?>
