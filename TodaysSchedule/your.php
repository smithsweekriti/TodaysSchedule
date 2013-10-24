
<?php require_once('header.php') ;
if(isset($_POST['username']))
   {
$_SESSION['username']=$_POST['username'];


   
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
			echo '<font color=red>Invalid username or password</font><br/>';
    else
	        header("location: preview2.php");
}	
}
?>

All the details the mandatory to plan a schedule with <strong>Today's Schedule</strong>.

<form name="form1" method="post" action="your.php" >

<table width="75%" align="center" border="0" cellspacing="10">
<tr >
	<td nowrap align="right"><label for="usernametext">Username (Webmail) :</label>  </td>
	<td align="left"><input type="number" name="username"  value="<?php echo $_SESSION['username']; ?>" required/></td>
</tr>
<tr >
	<td align="right"><label for="passwordtext">Password (Webmail) : </label> </td>
	<td align="left"><input type="password" name="password" required /></td>
</tr>

<tr align="center">
	<td align="right"><input type="submit" name="Submit" value="Login" /></td>
	<td align="left"><input type="reset" name="reset" value="Reset" /></td>
</tr><p>
<tr><td colspan=2>&nbsp;</td></tr>
</table>


</form>

<?php require_once('footer.php') ?>

