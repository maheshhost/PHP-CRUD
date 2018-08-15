<?php

include "db.php";

if($_POST){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];

	$id = $_POST['id'];

    $sql = "UPDATE `members` SET fname='$fname', lname='$lname', age='$age', contact='$contact' WHERE id={$id}";

    $result = mysqli_query($conn,$sql);

    if($result){
    	echo "<center><p>Successfully Updated.</p></center>";
    	echo "<center><a href='edit.php?id=".$id."'><button type='button'>Back</button></a></center>";
    	echo "<center><a href='index.php'><button type='button'>Home</button></a></center>";
    }
}