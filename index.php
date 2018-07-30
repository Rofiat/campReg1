<?php include 'db.php';?>
<?php
if(isset($_GET['sucess'])){
	$sucess=$_GET['sucess'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Camp Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<header id="deleg">Camp Delegate</header>

		<?php if(isset($sucess)): ?>
			<div class="succ"><?php echo $sucess; ?></div>
		<?php endif; ?>
		<article>
			<table>
			<form method="POST" action="process.php">
				<tr ><td width="20%" ><label class="lab"><b>FirstName</b></label></td>
				<td width="80%"><input type="text" class="name" placeholder="Your own Name" name="Fname" required></td>
				</tr>

				<tr><td width="30%">
				<label class="lab"><b>LastName</b></label></td>
				<td width="70%"><input type="text" class="name" placeholder="Your Surname" name="Lname" required></td>
				</tr>

				<tr><td width="20%">
				<label class="lab"><b>School</b></label></td>
				<td width="80%"><select name="schl" class="name ">
					<option>Bolade Grammar School</option>
					<option>Ikeja Grammar School</option>
					<option>Mafoluku Grammar School</option>
					<option>Crescent Model College</option>
					<option>Ikhwan Schools</option>
				</select></td>
				</tr>

				<tr><td width="20%">
				<label class="lab"><b>Class</b></label></td>
				<td width="80%"><select name="cls" class="name">
					<option >JSS1</option>
					<option >JSS2</option>
					<option >JSS3</option>
					<option >SS1</option>
					<option >SS2</option>
					<option >SS3</option>
				</select></td>
				</tr>

				<tr><td width="20%">
				<label class="lab"><b>Address</b></label></td>
				<td width="80%"><textarea name="add" class="name" required></textarea></td>
				</tr>

				<tr><td width="20%">
				<label class="lab"><b>Phone Number</b></label></td>
				<td width="80%"><input type="number" name="no" class="name" required></td>
				</tr>


				<tr ><td width="20%"></td>
				<td width="80%"><input type="submit" value="Save" class="sub" name="submit"></td>
				</tr>

			</form>
			</table>
		</article>
	</div>  
	
</body>
</html>