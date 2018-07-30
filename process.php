<?php include 'db.php'; ?>

<?php
	$fname= mysqli_real_escape_string($conn, $_POST['Fname']);
	$lname= mysqli_real_escape_string($conn, $_POST['Lname']);
	$schl=	 mysqli_real_escape_string($conn, $_POST['schl']);
	$cls = 	mysqli_real_escape_string($conn, $_POST['cls']);
	$add = 	mysqli_real_escape_string($conn, $_POST['add']);
	$no = 	mysqli_real_escape_string($conn, $_POST['no']);
	
	$query= "INSERT INTO campreg (Firstname, Lastname, School, Class, Address, PhoneNumber) VALUES ('$fname','$lname','$schl','$cls','$add','$no')";

	if(!mysqli_query($conn,$query)){
		die(mysqli_error($conn));
	}
	else{
		header('Location: index.php?sucess=Registration%20was%20successful');
	}

?>