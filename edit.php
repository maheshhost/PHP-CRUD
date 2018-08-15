<?php

include "db.php";

if($_GET['id']){
	$id = $_GET['id'];

	$sql = "SELECT * FROM `members` WHERE id={$id}";

	$result = mysqli_query($conn,$sql);

	$data = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit - Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><form method="POST" action="update.php">
<fieldset style="margin-top: 200px;margin: auto; width: 50%;">
	<legend>Edit Members</legend>
<table cellspacing="0" cellpadding="0">
	<tr>
		<th>FirstName</th>
		<td>
			<input type="text" name="fname" placeholder="FirstName" value="<?php echo $data['fname'] ?>" required>
		</td>
	</tr>
	<tr>
		<th>LastName</th>
		<td>
			<input type="text" name="lname" placeholder="LastName" value="<?php echo $data['lname'] ?>" required>
		</td>
	</tr>
	<tr>
		<th>Age</th>
		<td>
			<input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>" required>
		</td>
	</tr>
	<tr>
		<th>Address</th>
		<td>
			<input type="text" name="contact" placeholder="Contact" value="<?php echo $data['contact'] ?>" required>
		</td>
	</tr>

	<tr>
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<td><button type="submit">Save Changes</button></td>
		<td><a href="index.php"><button type="button">Back</button></a></td>
	</tr>


</table>
</fieldset>
</form>
</body>
</html>
<?php 
}

?>
