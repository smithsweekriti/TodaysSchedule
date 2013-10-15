<?php require_once('header.php') ;

$_SESSION['occasion']=$_POST['occasion'];
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$_SESSION['department']=$_POST['department'];
$_SESSION['date']=$_POST['date'];
$_SESSION['time']=$_POST['time'];
$_SESSION['venue']=$_POST['venue'];

$sql0 = "SELECT
			username,
			occasion
			
		FROM
			scheduler where username= $_POST[username], occasion=$_POST[occasion]";

$result0=mysql_query($sql0);

if(!$result0)
{
	echo 'Error occured. Please try later';
}
else
{
	if(mysql_num_rows($result1)==0)
	{
		$sql = "INSERT INTO scheduler
				VALUES('".$_POST['username']."','".$_POST['password']."','".$_POST['department']."','".$_POST['occasion']."')";
			$result = mysql_query($sql);
			
		$sql1 = "INSERT INTO schedule
				VALUES('".$_POST['occasion']."','".$_POST['date']."','".$_POST['time']."','".$_POST['venue']."','".$_POST['event']."')";
			$result1 = mysql_query($sql1);
			
			if(!$result || !$result1)
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
		$sql2 = "UPDATE	schedule SET occasion='".$_POST['occasion']."', date='".$_POST['date']."',time='".$_POST['time']."',venue='".$_POST['venue']."',event='".$_POST['event']."'
			
			where occasion=$_POST[occasion]";
			
	}
}
header("location: preview.php");
require_once 'footer.php';
?>