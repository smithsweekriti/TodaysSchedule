<?php require_once('header.php') ;

$_SESSION['username']=$_POST['username'];

if(isset($_SESSION['err']))
   unset($_SESSION['err']);
   
$sql = "SELECT *
		FROM
			android.scheduler where username='$_POST[username]' and password='$_POST[password]'" ;

$result=mysql_query($sql);

if(!$result)
{
	$_SESSION['err']= 'Error occured. Please try later!';
}
else
{
	if(mysql_num_rows($result)==0)
	{
		echo '<font color=red>Invalid username or password</font>';
		
else
{	
	
	header("location: preview2.php");
}	
require_once 'footer.php';
?>