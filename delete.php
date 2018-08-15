<?php

include "db.php";

if($_POST['id']){
	$id = $_POST['id'];

	$sql = "UPDATE `members` SET active = 2 WHERE id={$id}";

	$result = mysqli_query($conn,$sql);

	if($result) {
		echo "<center><p>Member Successfully Removed.</p></center> ";
		echo "<center><a href='index.php'><button type='button'>Home</button></a></center>";

	} else {
		echo "Error: Removing Member Try again later.";
	}
}