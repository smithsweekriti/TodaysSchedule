
<?php require_once('header.php') ;
?>

All the details the mandatory to plan a schedule with <strong>Today's Schedule</strong>.

<form name="form1" method="post" action="validate.php" >

<table width="75%" align="center" border="0" cellspacing="10">
<tr >
	<td nowrap align="right"><label for="usernametext">Username (Webmail) :</label>  </td>
	<td align="left"><input type="number" name="username"  value="<?php echo $_SESSION['username']; ?>" required/></td>
</tr>
<tr >
	<td align="right"><label for="passwordtext">Password (Webmail) : </label> </td>
	<td align="left"><input type="password" name="password" required /></td>
</tr>
<tr>
	<td align="right"><label for="department">Department:<label></td>
						<td><select id="department" name="department" required >

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
	<td align="left"><input type="text" name="occasion" size="18" required /></td>
</tr>
<tr >			
	<td  align="right"><label for="date">Date </label></td>
	<td align="left"><input type="date" name="date" size="18" required /></td>
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
		
			<input type="number" name="sno" value="1" min="1" max="99" placeholder="<?php echo "Sno"; ?>" required/>
			<input type="text" name="time"  placeholder="Time" size="18" required />
			<input type="text" name="event" placeholder="Event" size="18" required />
			<input type="text" name="venue" placeholder="Venue" size="18" required />
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

