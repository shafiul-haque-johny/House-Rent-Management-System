<?php

require_once 'db.php';

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$sql="Select * FROM room where room_id= '$id';";

	$result = mysqli_query($con,$sql);

	   
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	        


	if($row['status']=="0")
	{
		$sql = "UPDATE `room` SET `status` = '1' WHERE `room_id` = '$id';";
		$con->query($sql);


		header("Location: test.php?msg=booked");
	}
	if($row['status']=="1")
	{
		header("Location: test.php?error=booked");
	}






	
}
?>
