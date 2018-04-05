<?php
	require "connn.php";
	
	$id = 6;
	$name = "Rai";
	$mobile = "1542697565";
	
	$query = "insert into reg values(".$id.",'".$name."','".$mobile."');";
	
	$res = mysqli_query($con, $query);
	if(!$res)
		echo "Error in insertion";
	else
		echo "Insertion Successfull";
?>