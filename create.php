<?php require_once('header.php') ;?>

<?
	if(!isset($username))
	$username="";
		require_once('functions.php');
		if(isset($_POST['Submit']))
		{
			$username=htmlentities($_POST['username'],ENT_QUOTES);
			$password=htmlentities($_POST['password'],ENT_QUOTES);
			if($username=="" or $password=="")
			{
			$text="<font color=red>Please Enter Username/Password</font>";
			$_SESSION['type']=0;
			}
			else
			{

                     //$username = escapeshellcmd($username);
	             // $password = escapeshellarg($password);
       	       $command1 = "python imap.py $username $password";
		       $auth_status1 = trim(shell_exec($command1));
       	        if ($auth_status1)
	                    {
			        $_SESSION['login']=true;
			        $_SESSION['user']=$username;
				 $_SESSION['type']=1;
				 die("<script>top.location='index.php'</script>");
				}
				else 
				{
					require_once('conn.php');
                                   $password = SHA1($password); 
					$sql="Select username,role from users where username='$username' and password='".(($password))."'";
					$result=mysql_query($sql,$conn);
					//echo mysql_num_rows($result);
                                   if($result and mysql_num_rows($result)>0)
					{
						$row=mysql_fetch_array($result);
						$_SESSION['login']=true;
						$_SESSION['user']=$row['username'];
						//echo 'here';
						die("<script>top.location='index.php'</script>");
					
					}
				}
				$text="<font color=red>Invalid Username/Password</font>";
			}
		}

?>

Fill all the details to plan a schedule with <strong>Today's Schedule</strong>.
<script>
function validate()
{
	var f=document.form1
	if(f.username.value=="")
	{	error(document.getElementById("usernametext"))
		f.username.focus()
		return false;
	}
	if(f.password.value=="")
	{	error(document.getElementById("passwordtext"))
		f.password.focus()
		return false;
	}
	return true
}
function error(id)
{
	id.style.color='red'
}

</script>

<form name="form1" method="post" action="validate.php" onsubmit="return validate()">

<table width="70%" align="center" border="0" cellspacing="10">
<tr >
	<td nowrap align="right"><label for="usernametext">Username (Webmail) :</label>  </td>
	<td align="left"><input type="number" name="username"  value="<?php echo $username; ?>"/></td>
</tr>
<tr >
	<td align="right"><label for="passwordtext">Password (Webmail) : </label> </td>
	<td align="left"><input type="password" name="password"  /></td>
</tr>
<tr>
	<td align="right"><label for="department">Department:<label></td>
						<td><select id="department" name="department" >

						<option value="">Department</option>
						<option value="Architecture">Architecture</option>
						<option value="Chemical Engineering">Chemical Engineering</option>
						<option value="Chemistry">Chemistry</option>
						<option value="Civil Engineering">Civil Engineering</option>
						<option value="Computer Applications">Computer Applications</option>
						<option value="computer Science and Engineering">computer Science and Engineering</option>
						<option value="Electricals and Electronics Engineering">Electricals and Electronics Engineering</option>
						<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
						<option value="Humanities">Humanities</option>
						<option value="Instrumentation and Control Engineering">Instrumentation and Control Engineering</option>
							<option value="Management Studies">Management Studies</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Production Engineering">Production Engineering</option>
						<option value="Metallurgical and Materials Engineering">Metallurgical and Materials Engineering</option>
						<option value="Physics">Physics</option>
						</select>
</tr>
<tr >			
	<td  align="right"><label for="occasion">occasion </label></td>
	<td align="left"><input type="text" name="occasion" size="18" /></td>
</tr>
<tr >			
	<td  align="right"><label for="date">Date </label></td>
	<td align="left"><input type="date" name="date" size="18" /></td>
</tr>

<tr>
    <td align="right"><label for="addeve">Add more events </label></td>
	<td align="left"><input type="text" name="addnum" id="addnum" value="" size="3">&nbsp;&nbsp;&nbsp;
					 <input type="button" name="addbtn" id="addbtn" value="go!"></td>
</tr>

<tr>
<td colspan=2>
	<fieldset id="lunches"> 
		<legend>Event's list</legend><br/>
		<div class="formrow">
			<input type="text" name="time[]"  placeholder="Time" size="19" />
			<input type="text" name="event[]" placeholder="Event" size="19" />
			<input type="text" name="venue[]" placeholder="Venue" size="19" />
		</div>
	</fieldset>

</td>
    
    
</tr>
    
    
</tr>
<script src="js/utilities.js"></script>
<script src="js/addelements.js"></script>
<tr >
	<td ></td>
	<td ></td>
</tr>

<tr align="center">
	<td align="right"><input type="submit" name="Submit" value="Create" /></td>
	<td align="left"><input type="reset" name="reset" value="Reset" /></td>
</tr><p>
<tr><td colspan=2>&nbsp;</td></tr>
</table>


</form>

<?php require_once('footer.php') ?>

