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
	<title>Remove Member</title>
</head>
<body><center>
<h3 style="margin-top: 150px;">Do You Really Want to remove ?</h3>
<form action="delete.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
	<button type="submit">Yes</button>
	<a href="index.php"><button type="button">No</button></a>
</form>
</center>
</body>
</html>

<?php

}

?>