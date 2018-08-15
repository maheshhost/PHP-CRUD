<?php

include "db.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Members List</title>
</head>
<body>
	<center><a href="create.php"><button type="button">AddMembers</button></a></center>
<table border="1" cellpadding="0" cellspacing="0" style="width: 100%; margin-top: 20px; text-align: center; ">
<thead>
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Address</th>
		<th>Option</th>
	</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM `members` WHERE active=1";
$result = mysqli_query($conn,$sql);

if($result){
	while ($row = $result->fetch_assoc()) {
		echo "<tr>
			<td>".$row['fname']." ".$row['lname']."</td>
			<td>".$row['age']."</td>
			<td>".$row['contact']."</td>
			<td>
			<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
			<a href='remove.php?id=".$row['id']."'><button type='button'>Delete</button></a>
			</td>
			</tr>";
		
	}
} else {
	echo "<tr><td colspan='5'><center>NO Data Available</center></td></tr>";
}

?>
</tbody>
</table>
</body>
</html>