<?php
include "db.php";

if ($_POST) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];

	$sql = "INSERT INTO `members` (fname,lname,age,contact,active) VALUES ('$fname','$lname','$age','$contact', 1)";

	$result = mysqli_query($conn,$sql);

    if($result) {
    	echo "<p>New Record successfully Created.</p>";
    	echo "<a href='create.php'><button type='button'>Back</button></a>";
    	echo "<a href='index.php'><button type='button'>Home</button></a>";
    }else {
    	echo "Something wrong Happened";
    }

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Create Page</title>
</head>
<body>
	<fieldset>
		<legend>Add Member</legend>
		<form action="create.php" method="POST">
			<table border="1" cellspacing="0" cellpadding="0">
				<tr>
					<th>FirstName</th>
					<td><input type="text" name="fname" placeholder="FirstName" required></td>
				</tr>
				<tr>
					<th>LastName</th>
					<td><input type="text" name="lname" placeholder="LastName"  required></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><input type="text" name="age" placeholder="Age" required></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><input type="text" name="contact" placeholder="Contact" required></td>
				</tr>
				<tr>
					<td><button type="submit">Save Changes</button></td>
					<td><a href="index.php"><button type="button">Back</button></a></td>
				</tr>
			</table>
		</form>

	</fieldset>

</body>
</html>