
<?php require_once('header.php') ;
$_SESSION['occasion']=$_POST['s'];?>
<strong>Today's Schedule</strong> for<strong>

<?php 
echo $_SESSION['occasion'];

$sql="SELECT * FROM schedule WHERE occasion= '$_SESSION[occasion]'";
$result=mysql_query($sql);


if(!$result)

	echo 'Error occurred while fetching data. ';
	else
	{
?>

</strong>
<table align="center" width="70%" id="table1">
<tr style="background-color: skyblue;">
<th>Time</th>
<th>Occasion</th>
<th>Event</th>
<th>Venue</th>

</tr>
<?php

	while($row = mysql_fetch_assoc($result))
	{
?>
<tr >
	<td align="center"><?php echo $row['time'] ?></td>
	<td align="center"><?php echo $row['occasion'] ?></td>
	<td align="center"><?php echo $row['event'] ?></td>
	<td align="center"><?php echo $row['venue'] ?></td>

<?php
}
?>
</tr>
</table><br />


<?php }
require_once('footer.php') ?>
