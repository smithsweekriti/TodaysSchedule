<?php require_once('header.php') ;

$_SESSION['sno']=$_POST['sno'];
$_SESSION['occasion']=$_POST['occasion'];
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$_SESSION['department']=$_POST['department'];
$_SESSION['date']=$_POST['date'];
$_SESSION['time']=$_POST['time'];
$_SESSION['event']=$_POST['event'];
$_SESSION['venue']=$_POST['venue'];
$_SESSION['err']= '';
if(isset($_SESSION['err']))
   unset($_SESSION['err']);
   
$sql = "SELECT *
		FROM
			android.schedule where date='$_SESSION[date]' and time='$_SESSION[time]' and venue='$_SESSION[venue]'" ;

$result=mysql_query($sql);

if(!$result)
{
	$_SESSION['err']= 'Error occured. Please try later!';
}
else
{
	if(mysql_num_rows($result)==0)
	{
		$sql1 = "INSERT INTO scheduler
				VALUES($_SESSION[username],'$_SESSION[password]','$_SESSION[department]','$_SESSION[occasion]')";
			$result1 = mysql_query($sql1);
			
		$sql2 = "INSERT INTO schedule
				VALUES('$_SESSION[sno]','$_SESSION[occasion]','$_SESSION[date]','$_SESSION[time]' ,'$_SESSION[venue]','$_SESSION[event]')";
			$result2 = mysql_query($sql2);
			
			if(!$result1 || !$result2)
			{
				echo 'Error'.mysql_error();
			}
			else
			{
				echo 'New occasion successfully added.';
			}
		
	}
	else
	{
		$_SESSION['err']= 'Repeated entry!';
			
	}
}
	
	
	header("location: preview.php");
	
require_once 'footer.php';
?>